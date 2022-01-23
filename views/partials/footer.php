    </div>
    <script>
        let dark = document.getElementsByTagName("html");
        dark = Array.from(dark);
        dark = dark[0];
        console.log(dark);
        function dMode(){
            dark.classList.toggle("dark mb-[58px]");
        }
    </script>
  </body>
</html>