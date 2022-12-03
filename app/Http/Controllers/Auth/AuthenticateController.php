<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthenticateController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['authenticate']]);
    }

    public function authenticate(Request $request)
    {
        // grab credentials from the request
        $credentials = $request->only('email', 'password');

        try {
            // attempt to verify the credentials and create a token for the user
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        $user = auth()->user();
        // all good so return the token
        return response()->json(compact('token', 'user'));
    }

    // somewhere in your controller
    public function getAuthenticatedUser()
    {
        try {

            if (!$user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }
        } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

            return response()->json(['token_expired'], $e->getStatusCode());
        } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

            return response()->json(['token_invalid'], $e->getStatusCode());
        } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {

            return response()->json(['token_absent'], $e->getStatusCode());
        }

        // the token is valid and we have found the user via the sub claim
        return response()->json(compact('user'));
    }

    public function refreshToken(){
        if(!$token = JWTAuth::getToken())
            return response()->json(['error', 'token_not_send'], 401);
        try{
            $token = JWTAuth::refresh();

        }catch(Tymon\JWTAuth\Exceptions\TokenInvalidExceptio $e){
            return response()->json(['token_invalid'], $e->getStatusCode());
        }

        return response()->json(compact('token'));
    }

    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    // public function login(Request $request) {

    //     // autenticação (email e senha)
    //     $credentials = $request->all(['email', 'password']);
    //     // retornar um JWT (Json Web Token)
    //     $token = auth('api')->attempt($credentials);

    //     if($token) { //usuário autenticado
    //         return response()->json(['token' => $token, 'user' => auth('api')->user()]);
    //     } else { //erro de de usuário ou senha
    //         return response()->json(['erro' => 'Usuário ou senha inválido'], 403);
    //     }

    //     return 'login';
    // }

    // public function logout() {
    //     auth('api')->logout();
    //     return response()->json(['msg' => 'Logout foi realizado com sucesso!']);
    // }

    // public function refresh() {
    //     $token = auth('api')->refresh(); // cliente encaminha jwt válido
    //     return response()->json(['token' => $token]);
    // }

    // public function me() {
    //     return response()->json(auth()->user());
    // }
}
