$("#log").click(function(){

    $("#login").slideToggle(555,function(){
    
      $("#login").animate({height:"80vh"},444)
    }
    )
    $("#a").fadeToggle(555)

    
    })

    $("#tr").click(function(){

      $("#ptr").slideToggle(555,function(){
      
        $("#ptr").animate({height:"80vh"},444)
      }
      )
      $("#a").fadeToggle(555)
      $("#u").fadeToggle(555)
      $("#prd").hide(555)
      })

      $("#st").click(function(){

        $("#prd").slideToggle(555,function(){
        
          $("#prd").animate({height:"80vh"},444)
        }
        )
        $("#a").fadeToggle(555)
        $("#u").fadeToggle(555)
        $("#ptr").hide(555)
        })

        $("#logout").click(function(){
          window.location.href ="http://localhost/Gym/Gym.php";

          
          })

