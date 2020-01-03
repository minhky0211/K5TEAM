
function effect()
{
  var btnMode = document.getElementById('Mode');
    //Body
    var body = document.getElementsByClassName('full-lading-img');
    //Element of Table
    var table_x = document.getElementsByClassName('table');
    var col_table = document.getElementsByTagName('th');
    var row_table = document.getElementsByTagName('td');
    var cover_table = document.getElementsByClassName('cover');
    //Element of Nav bar
    var task_nav = document.getElementById('nav--bar');
    var li_nav = document.getElementsByClassName('rp-mb-li');
    //Element of Footer
    var footer = document.getElementsByTagName('footer');
    var link_footer = document.getElementsByClassName('linkSocial');
    //Element of Button Scroll to Top
    var src_top = document.getElementById('scr-top');
    //Element of Button Dark Mode
    var btn_mode = document.getElementById('Mode');
    var i_mode = document.getElementById('dark-icon');
    //Element of Content Box on Index
    var col_md = document.getElementsByClassName('content-box');
    var col_hr_sub = document.getElementsByClassName('sub');
    var col_hr_enter = document.getElementsByClassName('enter');
    var review_text = document.getElementsByClassName('review-text');
    var obutton = document.getElementsByClassName('obutton');
    //Đổi màu Cfs Box
    var btn_cfs = document.getElementById('Submit');
    btnMode.onclick = function() {
        //Đổi màu bảng
        for (var i = 0; i < table_x.length; i++){
            table_x[i].style.color = "white";
            table_x[i].style.background = "rgba(0, 0, 0, 0.76)";
        }
        for (var j = 0; j < col_table.length; j++){
            col_table[j].style.border = "1px solid yellow";
            col_table[j].style.borderTop = "1px solid yellow !important";
        }
        for (var k = 0; k < row_table.length; k++){
            row_table[k].style.border = "1px solid yellow";
        }
        for (var k1 = 0; k1 < cover_table.length; k1++){
            cover_table[k1].style.background = "rgba(0, 0, 0, 0.76)";
        }
        //Đổi màu Nav Bar
        task_nav.style.background = "rgba(0, 0, 0, 0.8)";
        for (var i1 = 0; i1 < li_nav.length; i1++){
            li_nav[i1].style.color = "yellow";
                $("li").hover(function(){
                    $(this).css("background-color", "yellow");
                    $(this).css("color", "black");
                    $(this).css("border-bottom","3px black solid");
                    $(this).css("border-top","3px white solid");
                    $(this).css("margin-right", "40px");
                    $(this).css("transition", "1s");
                }, function(){
                    $(this).css("background-color", "rgba(0, 0, 0, 0)");
                    $(this).css("color", "yellow");
                    $(this).css("border-bottom","none");
                    $(this).css("border-top","none");
                    $(this).css("margin-right", "0px");
                });
        }
        //Đổi màu Footer
        for (var f= 0; f < footer.length; f++){
            footer[f].style.background = "#000000a3";
            footer[f].style.color = "yellow";
            footer[f].style.borderTop = "3px solid yellow";
        }
        for (var link_f = 0; link_f < link_footer.length; link_f++){
            link_footer[link_f].style.color = "yellow";
        }
        //Đổi màu Button Scroll to top
        src_top.style.border = "solid 2px yellow";
        src_top.style.borderRadius = "50%";
        //Đổi màu button Mode
        btn_mode.style.border = "2px yellow solid";
        btn_mode.style.background = "black";
        i_mode.style.color = "yellow";
        //Đổi màu content on Homepage
        for (var c = 0; c < col_md.length; c++) {
            col_md[c].style.background = "#000000c2";
        }
        for (var c1 = 0; c1 < col_hr_sub.length; c1++){
            col_hr_sub[c1].style.border = "1px solid yellow";
            col_hr_enter[c1].style.border = "1px solid yellow";
        }
        for (var c2 = 0; c2 < review_text.length; c2++){
            review_text[c2].style.border = "1px solid yellow";
            review_text[c2].style.color = "yellow";

        }
        for(var c3 = 0; c3 < obutton.length; c3++){
            obutton[c3].style.border = "1px solid yellow";
            obutton[c3].style.color = "yellow";
            obutton[c3].style.background = "none";
        }
        btn_cfs.style.color = "yellow";
        btn_cfs.style.background = "none";
        btn_cfs.style.border = "1px solid yellow";
      };
  //ripples
  $(".full-landing-img").ripples(
    {
      resolution: 400,
      perturbance: 0.4,
      dropRadius: 20,
      interactive:true,
    }
);
  //sticky navBar and Scroll to top
  var backTop = document.getElementById("scr-top");
    window.onscroll = function() {stickybar(), scrollFunction()};

  var navbar = document.getElementById("nav--bar");
  var sticky = navbar.offsetTop;

    function stickybar()
     {
      if (window.pageYOffset >= sticky)
        {
          navbar.classList.add("sticky")
        }
      else
        {
        navbar.classList.remove("sticky");
        }
    }
    function scrollFunction()
      {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20)
           {
            backTop.style.display = "block";
           }
         else
            {
              backTop.style.display = "none";
            }
      }
}
// When the user clicks on the button, scroll to the top of the document
function topFunction()
   {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
   }
