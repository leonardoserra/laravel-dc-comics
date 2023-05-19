<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=>'required|max:150',
            'description'=>'required|max:20000',
            'thumb'=>'required|max:60000|url',
            'price'=>'required|decimal:0,2',
            'series'=>'required|max:20000',
            'sale_date'=>'required|date',
            'type'=>'required|max:20000',
           
        ];
    }

    public function messages()
    {
        return [

            'title.required' => 'il titolo serve per forza ao!',
            'title.max' => 'titolo... mica lista di nozze',

            'description.required' => 'scrivi qualcosa giusto per farmi capire di che si tratta',
            'description.max' => 'qualcosa mi dice che i riassunti alle medie non erano il tuo forte....',

            'thumb.required' => 'e che non ci vuoi mettere l\'immagine? A un fumetto??',
            'thumb.max' => 'ok che gli url sono lunghi.. ma questo forse lo è troppo',
            'thumb.url' => 'prova a farlo iniziare con https:// e magari mettici qualcosa che abbia senso ... bah',

            'price.required' => 'sarebbe bello vivere in un mondo di condivisione...pero qui le cose si pagano... mettici un prezzo',
            'price.decimal' => 'ok essere pignoli.. ma 2 cifre dopo la virgola bastano e avanzano caro',

            'series.required' => 'allora, anche se spiderman incontra superman  e sembra che siano nello stesso fumetto non è cosi..devi dirmi se tutto gira attorno a spidy o a clark.. ',
            'series.max' => 'poche. semplici. parole... ma come fanno i tuoi amici ad ascoltarti..?',

            'sale_date.required' => 'di solito piú è vecchio e piú costa... vedi tu ;)',
            'sale_date.date' => 'ok hai ragione.. siamo in Italia, peró scrivi anno-mese-giorno ',

            'type.required' => 'metti che tuo figlio vuole un fumetto fantasy e non c\'e scritto, allora gli tocca sfogliarli tutti e magari finisce su qualche storia di tentacoli... scrivi il genere del fumetto va',
            'type.max' => 'genere... non trama con cast e recensioni...',
        ];
    }
}
