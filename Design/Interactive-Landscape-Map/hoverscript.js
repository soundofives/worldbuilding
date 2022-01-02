/*
http://stackoverflow.com/questions/40497584/imagemap-on-hover-display-image/40526150#40526150
*/

// $("area").mouseenter(function(e) {

//     if ($(this).parent('div').children('div.image').length) {
//             $(this).parent('div').children('div.image').show().css({
//             left: e.pageX + 10,
//             top: e.pageY + 10,
//             z-index: 2
//         });
//     }


// });

// $("area").mouseout(function(e) {
//     $(this).parent('div').children('div.image').hide();
//   // $("#image").hide();
// });


$(document).ready(function() {
    $("area").mousemove(function(e) {
      $("#image").attr("src", $(this).data("image")).show().css({
        left: e.pageX + 10,
        top: e.pageY + 10
      });
    });
    $("area").mouseout(function(e) {
      $("#image").hide();
    });
})


// <script type="text/javascript">

function FindPosition(oElement)
{
  if(typeof( oElement.offsetParent ) != "undefined")
  {
    for(var posX = 0, posY = 0; oElement; oElement = oElement.offsetParent)
    {
      posX += oElement.offsetLeft;
      posY += oElement.offsetTop;
    }
      return [ posX, posY ];
  }
  else
  {
    return [ oElement.x, oElement.y ];
  }
}

function GetCoordinates(e)
{
  var PosX = 0;
  var PosY = 0;
  var ImgPos;

  ImgPos = FindPosition(myImg);

  if (!e) var e = window.event;
  if (e.pageX || e.pageY)
  {
    PosX = e.pageX;
    PosY = e.pageY;
  }
  else if (e.clientX || e.clientY)
    {
      PosX = e.clientX + document.body.scrollLeft
        + document.documentElement.scrollLeft;
      PosY = e.clientY + document.body.scrollTop
        + document.documentElement.scrollTop;
    }
  PosX = PosX - ImgPos[0];
  PosY = PosY - ImgPos[1];
  //return [PosX,PosY];
  document.getElementById("x").innerHTML = PosX;
  document.getElementById("y").innerHTML = PosY;
}

//-->
//</script>


// $("area").mousemove(function(e) {
//     $("#image").show().css({
//         left: e.pageX + 10,
//         top: e.pageY + 10
//     });
// });
// $("area").mouseout(function(e) {
//     $("#image").hide();
//});



    // $(this).parent('div').children('div.image').show().css({
    //     left: e.pageX + 10,
    //     top: e.pageY + 10,
    //     z-index: 2
    // });


  // $("#image").attr("src", $(this).data("image")).show().css({
  //   left: e.pageX + 10,
  //   top: e.pageY + 10,
  //   z-index: 2
  // });
  //   }) ;




   // else {
   //      var image_name=$(this).data('image');
   //      var imageTag='<div class="image" style="position:absolute;">'+'<img src="'+image_name+'" alt="image" height="100" />'+'</div>';
   //      $(this).parent('div').append(imageTag);
   //  }