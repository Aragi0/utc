function init(){
    //RUTA DE LA API QUE SE USARA 
    //verifica que sea el formato json
    var Carrera='http://127.0.0.1:8000/apiCarreras'
    var PlanEstudio='http://127.0.0.1:8000/apiPlan'
    // var PlanEstudio='http://127.0.0.1:8000/apiPlan';
    // pueden usar las rutas relativas para que no hsya problema pero si estan usando
    // php artisan serv usen la misma total es como lo tengo enrutado pero como vean
    //INICIO DE VUE
    new Vue({
        // SE LE ASIGNA EL TOKEN
         http: {
            headers: {
               'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
            }
        },
    el:'#carreras',

    data:{
        carreras:[],
        planEstudio:[],
        id:'',
        codigo:'',
        nombre_carrera:'',
        id_plan:'',
        editando:false,
        mensaje:'Si sale esto es pq ya anda jalando pinche vue jsjsjsj',
        nombre_plan:''

    },

    created() {
        this.getCarreas();
    },
    methods: {
        getCarreas:function(){
            this.$http.get(Carrera).then(function(json){
                this.carreras=json.data;
            }).catch(function(json){
                 console.log.json
            });
        },

        getPlan:function(){
            this.$http.get(PlanEstudio).then(function(json){
                this.planEstudio=json.data;
            }).catch(function(json){
                 console.log.json
            });
        },

        
        
     },

        computed:{
            // filtroProd:function(){
            //     return this.productos.filter((producto)=>{
            //         return producto.nombre.toLowerCase().match(this.find.toLowerCase().trim())
            //     });
            // },
        }
    });
    //FIN DE VUE 
    
    } window.onload = init;