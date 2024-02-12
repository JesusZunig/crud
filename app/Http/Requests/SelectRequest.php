<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SelectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        /** ***************************************/
        /* PRIMERA OPCION */
        
        $valorCampo = $this->input('Seleccion');//Valor de la request del select seleccion
        $valorA = $this->input('SoloA');
        $valorB = $this->input('SoloB');
        $reglas = [
            'Seleccion' => 'required',
        ];//Validacion en un Array
       
    
        if($valorCampo == 'A'){
            //return $this->NuevasReglas();
            $Regresar = $this->NuevasReglas();
            $reglas = array_merge($reglas, $Regresar);

            if($valorA != null){
                $Regresar2 = $this->NuevasReglas2();
                $reglas = array_merge($reglas, $Regresar2);
            }//comparacion del valor, si no es nulo aplica la regla
        }//comparacion del valor, es verdad llama a la funcion NuevasReglas
        
        return $reglas;//retorna si cumple o no.
       
        /** **************************************/

        /*********************************************/
        /* SEGUNDA OPCION */
         /*      
        $valorCampo = $this->input('Seleccion');//Valor de la request del select seleccion
        $valorA = $this->input('SoloA');
        $valorB = $this->input('SoloB');
        $reglas = [
            'Seleccion' => 'required',
        ];//Validacion en un Array
        if($valorCampo == 'A'){
            $reglas['SoloA'] = 'required';

            if($valorA != null){
                $reglas['NombresA'] = 'required';
            }//comparacion del valor, si no es nulo aplica la regla
        }//comparacion del valor, se agrega al array una nueva validacion
        elseif ($valorCampo == 'B') {
            $reglas['SoloB'] = 'required';

            if($valorB != null){
                $reglas['NombresB'] = 'required';
            }//comparacion del valor, si no es nulo aplica la regla
        }
        return $reglas;//retorna si cumple o no.
        */
       /********************************************/
    }

    public function NuevasReglas(){

        return [
            //'Seleccion' =>'required',
            'SoloA' => 'required'
        ];//retorna si la validacion se cumple o no

    }

    public function NuevasReglas2(){

        return [
            //'Seleccion' =>'required',
            'NombresA' => 'required'
        ];//retorna si la validacion se cumple o no

    }

    public function messages()
    {
        return[
            'Seleccion.required' =>'falta la seleccion',
            'SoloA' => 'Falta la seleccion de SoloA',
            'SoloB' => 'Falta la seleccion de SoloB',
            'NombresA' => 'Requerido',
            'NombresB' => 'Requerido'
        ];
    }

/*     public function passedValidation()
    {
        // Accede a los datos validados utilizando el método validated()
        //$datosValidados = $this->validated();
       
        // Puedes realizar acciones adicionales con los datos validados
        // Por ejemplo, puedes acceder a un campo específico de la solicitud así:
       // $valorCampo = $this->input('Seleccion');
        //dd($valorCampo);
        // O puedes obtener la solicitud completa así:
       // $solicitudCompleta = $this->all();

        // Realiza cualquier lógica adicional que necesites con los datos validados aquí
    } */
}
