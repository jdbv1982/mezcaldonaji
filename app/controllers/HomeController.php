<?php

use Tradicion\Entities\Producto;

class HomeController extends BaseController {

    public function index()
    {
    	return View::make('web/edad');
    }

    public function inicio(){
        return View::make('web/inicio');
    }

    public function salir(){
        return View::make('web/salir');
    }

    public function historia(){
        return View::make('web/historia');
    }

    public function proceso(){
        return View::make('web/proceso');
    }

    public function productos(){
        //return Producto::all();
        return View::make('web/productos');
    }

    public function producto($id){
        $locale = $this->getIdioma();
        $id = $locale == "en" ? $id+20 : $id;
        $producto = Producto::find($id);
        return View::make('web/producto', compact('producto'));
    }

    public function contacto(){
        return View::make('web/contacto');
    }

    public function SI(){

        $locale = $this->getIdioma();

        Session::flush();
        Session::push('mayoredad', 'SI');

        if($locale == 'en') {
            return Redirect::to(Lang::get('en/producto/1'));
        }

        return Redirect::to(Lang::get('producto/1'));
    }


    public function getIdioma(){
        $locale = Request::segment(1);

        if (in_array($locale, Config::get('app.available_locales'))) {
            \App::setLocale($locale);
        } else {
            $locale = null;
        }
        return $locale;
    }



}
