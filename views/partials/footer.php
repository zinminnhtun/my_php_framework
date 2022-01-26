</div>

<script>
    // let dark = document.getElementsByTagName("html");
    // dark = Array.from(dark);
    // dark = dark[0];
    // console.log(dark);
    //
    // function dMode() {
    //     dark.classList.toggle("dark");
    // }


    new Vue({
        el: "#app",
        data: {
            message: 'how are you? Sleep now',
            ismore : false,
            nav_focus1:false,
            nav_focus2:false,
            nav_focus3:false,
            nav_focus4:false,
            nav_focus5:false,
        },
        methods:{
            more(){
               this.ismore = !this.ismore;
               console.log(this.ismore);
            },
            navFocus(x){
                if(x==1)
                    this.nav_focus1 = true;
                if(x==2)
                    this.nav_focus2 = true;
                if(x==3)
                    this.nav_focus3 = true;
                if(x==4)
                    this.nav_focus4 = true;
                if(x==5)
                    this.nav_focus5 = true;
            }
        }
    });


</script>

</body>
</html>