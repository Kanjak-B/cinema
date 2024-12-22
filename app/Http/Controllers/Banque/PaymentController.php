<?php

namespace App\Http\Controllers\Banque;

use Error;
use Carbon\Carbon;
use App\Models\Cinema\Film;
use Illuminate\Http\Request;
use App\Models\Banque\Client;
use App\Models\Banque\Account;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use App\Http\Requests\PaymentFormRequest;
use App\Models\Cinema\Billet;
use App\Models\Cinema\Owner;

use function PHPUnit\Framework\throwException;

class PaymentController extends Controller
{
    public function form_payment($id)
    {
        $film = Film::find($id);
        return view('banque.login', compact('film'));
    }

    // public static function truc(bool $confim, $account, $ticket_price)
    // {
    //     if($confim == true)
    //     {
    //         $account->amount -= $ticket_price;
    //         $account->save();
    //         $client = Client::where('id',$account->client_id)->get();
    //     }
    //     return redirect()->route('test', [
    //         'account' => $account,
    //         'client' => $client,
    //     ]);
    //     // return view('banque.ticket', compact('account','client'));
    // }

    public function check(PaymentFormRequest $request): View | Redirector
    {
        // check if user has a account
        $account = Account::where([
            ['numero', $request->numero],
            ['password', $request->password],
        ])->with('client')->firstOrFail();

        $film = Film::findOrFail($request->film_id);
        $ticket_price = $film->ticket_price;

        if($account->amount < $ticket_price){
            abort(402);
        }
        // self::truc(true, $account, $ticket_price);

        // Do payment
        $account->amount -= $ticket_price;
        $account->save();
        $client = Client::where('id',$account->client_id)->get();
        $token = hash('sha256', Carbon::now());

        DB::beginTransaction();

        try {
            
            $owner = new Owner();
            $owner->name = $account->client->name;
            $owner->email = $account->client->email;
            $owner->telephone = $account->client->telephone;
            $owner->save();

            $billet = new Billet();
            $billet->owner_id = $owner->id;
            $billet->token = $token;
            $billet->film_id = $film->id;
            $billet->save();

            DB::commit();
            
        } catch (\Exception $e) {
            DB::rollBack();
        }

        return view('banque.ticket', [
            'account' => $account,
            'client' => $client,
            'token' => $token,
            'film' => $film,
        ]);
    }
}