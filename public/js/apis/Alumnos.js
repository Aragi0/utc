function init(){
    //RUTA DE LA API QUE SE USARA 
    var apiAlumnos='http://localhost/utc/public/apiAlumnos'
    // pueden usar las rutas relativas para que no hsya problema pero si estan usando
    // php artisan serv usen la misma total es como lo tengo enrutado pero como vean
    //INICIO DE VUE
    new Vue({
        // SE LE ASIGNA EL TOKEN
    
    el:'#alumnos',
    data:{
        mensaje:'holaaaa',
        alumnos:[],
        id:'',
        curp:'',
        num_seguro:'',
        apellido_paterno:'',
        apellido_materno:'',
        nombres:'',
        sexo:'',
        telefono:'',
        correo:'',
        direccion:'',
        localidad:'',
        municipio:''

         },
    created(){
       this.mostrarAlumnos();
    },
       
    methods: {
        mostrarAlumnos:function(){
          this.$http.get(apiAlumnos).then(function(json){
            this.alumnos=json.data;
          }).catch(function(json){
            console.log(json);
          });
        },   
             },//fin methods
    
    computed:{
            
             }//fin computed
    });
    //FIN DE VUE 
} window.onload=init;
    