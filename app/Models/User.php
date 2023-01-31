<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

   /* protected $table = 'logs';

    public function LogsForSearch($anoLectivo, $utilizador, $departamento)
    {
        $response['logs'] = DB::table('logs')
            ->select('logs.*')
            ->whereYear('logs.created_at', '=', $anoLectivo)
            ->where([
                ['logs.USER_NAME', '=', $utilizador],
                ['logs.departamento', '=', $departamento],
            ]);
        if (
            $anoLectivo == 'Todos' &&
            $utilizador == 'Todos' &&
            $departamento == 'Todos'
        ) {
            $response['logs'] = DB::table('logs')
            ->select('logs.*');
        } elseif ($anoLectivo == 'Todos' && $utilizador && $departamento) {
            $response['logs'] = DB::table('logs')

                ->select('logs.*')
                ->where([
                    ['logs.USER_NAME', '=', $utilizador],
                    ['logs.departamento', '=', $departamento],
                ]);
        } elseif (
            $anoLectivo == 'Todos' &&
            $utilizador == 'Todos' &&
            $departamento
        ) {
            $response['logs'] = DB::table('logs')

                ->select('logs.*')
                ->where([['logs.departamento', '=', $departamento]]);
        } elseif (
            $anoLectivo == 'Todos' &&
            $utilizador &&
            $departamento == 'Todos'
        ) {
            $response['logs'] = DB::table('logs')

                ->select('logs.*')
                ->where([['logs.USER_NAME', '=', $utilizador]]);
        } elseif ($anoLectivo && $utilizador == 'Todos' && $departamento) {
            $response['logs'] = DB::table('logs')

                ->select('logs.*')
                ->whereYear('logs.created_at', '=', $anoLectivo)
                ->where([['logs.departamento', '=', $departamento]]);
        } elseif (
            $anoLectivo &&
            $utilizador == 'Todos' &&
            $departamento == 'Todos'
        ) {
            $response['logs'] = DB::table('logs')

                ->select('logs.*')
                ->whereYear('logs.created_at', '=', $anoLectivo);
        } elseif ($anoLectivo && $utilizador && $departamento == 'Todos') {
            $response['logs'] = DB::table('logs')

                ->select('logs.*')
                ->whereYear('logs.created_at', '=', $anoLectivo)
                ->where([['logs.USER_NAME', '=', $utilizador]]);
        }

        return $response['logs']->get();
    }*/
}
