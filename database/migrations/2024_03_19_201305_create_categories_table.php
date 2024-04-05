<?php

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('nationality');
        });

        $nationality = ['it', 'es', 'gb'];

        $categories = [
            'motori',
            'motores',
            'engines',
            'elettronica',
            'electrónica',
            'electronics',
            'telefonia',
            'telefonià',
            'phones',
            'elettrodomestici',
            'electrodomésticos',
            'home appliances',
            'pesca',
            'pesca',
            'fishing',
            'libri',
            'libros',
            'books',
            'sport',
            'deporte',
            'sports',
            'abbigliamento',
            'ropa',
            'clothing',
            'giochi',
            'juegos',
            'games',
            'gioielli',
            'joyas',
            'jewerly'
        ];

        


            for ($i = 0; $i < count($categories); $i++) {
                $y = 0;
                Category::create(['name' => $categories[$i], 'nationality' => $nationality[$y]]);
                while ($y != 2) {
                    $y++;
                    $i++;
                    Category::create(['name' => $categories[$i], 'nationality' => $nationality[$y]]);
                }
            
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
