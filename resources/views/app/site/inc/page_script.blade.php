<script src="{{asset("vendor/tema/site")}}/js/jquery-3.3.1.min.js"></script>
<script src="{{asset("vendor/tema/site")}}/js/bootstrap.min.js"></script>
<script src="{{asset("vendor/tema/site")}}/js/jquery-ui.min.js"></script>
<script src="{{asset("vendor/tema/site")}}/js/jquery.countdown.min.js"></script>
<script src="{{asset("vendor/tema/site")}}/js/jquery.nice-select.min.js"></script>
<script src="{{asset("vendor/tema/site")}}/js/jquery.zoom.min.js"></script>
<script src="{{asset("vendor/tema/site")}}/js/jquery.dd.min.js"></script>
<script src="{{asset("vendor/tema/site")}}/js/jquery.slicknav.js"></script>
<script src="{{asset("vendor/tema/site")}}/js/owl.carousel.min.js"></script>
<script src="{{asset("vendor/tema/site")}}/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js" integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<script>
     $("#search").autocomplete({
        source:"{{route("site.searchTitle")}}",
        minLength : 4
        
    });
</script>

<script>
    $("#search").data("ui-autocomplete")._renderItem = function(ul,item) {
        var $li = $("<div>");
            // var $iul = $("ul");
            var $href = $(".ui-menu img")
            // $li.html("<b><a href='{{ route('site.productDetail','') }}/"+ item.value  +"'><span>"+ item.value +" </span></a></b>");
            
            $li.html("<div><a href='{{ route('site.productDetail','') }}/"+ item.url  +"'>"+ item.name +"<span> <img src ='{{asset("vendor/upload/product/")}}/"+ item.image +"'> </span></a></div>");
            $li.css({'margin-top':'15px',"border":"1px solid #efefef","border-radius":"15px"});
            // $iul.css({'display':'flex'});
            $href.css({'display':'flex'});
        return  $li.appendTo(ul);
    }
</script>

<script>
    $("#sort").on('change',function () {
        this.form.submit();
    })
</script>

<script>
    function copyLink(){
        var copyText = document.getElementById("copyLink");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        navigator.clipboard.writeText(copyText.value);
        iziToast.success({
            title: 'Hey!',
            position: 'topRight',
            message:  'Link Kopyalandı Hemen Paylaş?',
            image : '{{asset("vendor/upload/logo")}}/egesedeflogo.png'
        });
    }
</script>

<script>

    var productName = document.getElementById("productName").value;
    // console.log(productName);
   
</script>




{{-- <script>
var newtitle = 'Bizi unutma ! :(';
var oldtitle = document.title;
console.log(oldtitle);
window.onblur = function () { document.title =newtitle; }
window.onfocus = function () { document.title = oldtitle; } 
</script> --}}