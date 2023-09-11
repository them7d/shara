            <footer></footer>
            <?php
            wp_footer();
            ?>
            <script>
                  var   plus = document.querySelectorAll(".plus-btn"),
                        minus = document.querySelectorAll(".minus-btn");
                        // plus.addEventListener("click", ()=>{ console.log(this.getAttribute("data-id")) } );
                        for(let i=0;i<plus.length;i++){
                              plus[i].addEventListener("click", (e)=>{
                                    ++document.querySelector(`#${e.target.getAttribute("data-id")}`).value;
                                    document.querySelector('[name=update_cart]').dispatchEvent(new Event('click'));
                              });
                              minus[i].addEventListener("click", (e)=>{--document.querySelector(`#${e.target.getAttribute("data-id")}`).value 
                              document.querySelector(`#${e.target.getAttribute("data-id")}`).setAttribute("disable","flase");
                              
                        });
                        }
            </script>
      </body>
</html>