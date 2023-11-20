new Vue({
    el:".container",
    data:{
        //Variable para mostrar modal
        mostrar: false,
        //Variable independiente
        clase: "",
        //Valores de las tablas
        Tclientes:{
            t1: "Cedula",
            t2: "Nombre",
            t3: "Apellido",
            t4: "Numero",
            t5: "Vehiculo Comprado",
            t6: "Modelo",
            t7: "Marca",
            t8: "Fecha de Compra"
        },
        Tvendedores:{ 
            t1: "Cedula",
            t2: "Nombre",
            t3: "Apellido",
            t4: "Numero",
            t5: "Vehiculo Vendido",
            t6: "Modelo",
            t7: "Marca",
            t8: "Fecha de venta"
        },
        Tcarros:{
            t1: "Vehiculo Numero",
            t2: "Marca",
            t3: "Modelo",
            t4: "Color",
            t5: "Placas",
            t6: "Precio"
        },
        Tcompras:{
            t1: "Compra numero",
            t2: "Marca",
            t3: "Modelo",
            t4: "Color",
            t5: "Placas",
            t6: "Precio",
            t7: "Fecha de compra"
        },
        Tventas:{
            t1: "Venta numero",
            t2: "Marca",
            t3: "Modelo",
            t4: "Color",
            t5: "Placas",
            t6: "Precio",
            t7: "Fecha de venta"
        }
    },
    methods:{
        activar: function () {
            this.mostrar=true
            this.clase="animated bounceInDown"
        },

        desactivar: function () {
            this.mostrar=false
            this.clase="animated bounceIn"
        }
    }
});