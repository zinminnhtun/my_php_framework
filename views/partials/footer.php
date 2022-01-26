</div>

<script>
    let dark = document.getElementsByTagName("html");
    dark = Array.from(dark);
    dark = dark[0];
    console.log(dark);

    function dMode() {
        dark.classList.toggle("dark");
        let x = localStorage.getItem('dMode');
        if (x==="true"){
            x=true;
        }else{
            x=false;
        }
        x=!x;
console.log(x);

       // if(x=="false"){
       //      localStorage.setItem('dMode','false');
       //  }else if(x=="true"){
       //      localStorage.setItem('dMode','true');
       //  }else{
       //     localStorage.setItem('dMode','false');
       // }
       //
       //
       //  console.log(localStorage.getItem('dMode'));

    }


    new Vue({
        el: "#app",
        data: {
            message: 'how are you? Sleep now',
            ismore: false,
            nav_focus1: false,
            nav_focus2: false,
            nav_focus3: false,
            nav_focus4: false,
            nav_focus5: false,
            DMode:null,
        },
        methods: {
            more() {
                this.ismore = !this.ismore;
            },
            navFocus(x) {
                if (x == 1) {
                    this.nav_focus1 = true;
                    localStorage.setItem("nav_active", "nav_focus1");
                    this.nav_focus2 = false;
                    this.nav_focus3 = false;
                    this.nav_focus4 = false;
                    this.nav_focus5 = false;
                } else if (x == 2) {
                    this.nav_focus2 = true;
                    localStorage.setItem("nav_active", "nav_focus2");
                    this.nav_focus1 = false;
                    this.nav_focus3 = false;
                    this.nav_focus4 = false;
                    this.nav_focus5 = false;
                } else if (x == 3) {
                    this.nav_focus3 = true;
                    localStorage.setItem("nav_active", "nav_focus3");
                    this.nav_focus1 = false;
                    this.nav_focus2 = false;
                    this.nav_focus4 = false;
                    this.nav_focus5 = false;
                } else if (x == 4) {
                    this.nav_focus4 = true;
                    localStorage.setItem("nav_active", "nav_focus4");
                    this.nav_focus1 = false;
                    this.nav_focus2 = false;
                    this.nav_focus3 = false;
                    this.nav_focus5 = false;
                } else if (x == 5) {
                    this.nav_focus5 = true;
                    localStorage.setItem("nav_active", "nav_focus5");
                    this.nav_focus1 = false;
                    this.nav_focus2 = false;
                    this.nav_focus3 = false;
                    this.nav_focus4 = false;
                }

            },
            DMode(){
                this.Dmode = !this.DMode;
            }
        },
        mounted() {
            localStorage.getItem('dMode') == "true" ? this.dMode=true : this.dMode=false;
                     let x = localStorage.getItem("nav_active");
                        if (x == 'nav_focus1') {
                this.nav_focus1 = true;
            } else if (x == 'nav_focus2') {
                this.nav_focus2 = true;
            } else if (x == 'nav_focus3') {
                this.nav_focus3 = true;
            } else if (x == 'nav_focus4') {
                this.nav_focus4 = true;
            } else if (x=='nav_focus5'){
                this.nav_focus5 = true;
            }

        }
    });


</script>

</body>
</html>