$(document).ready(function(){
   $("#noahfree div").css("opacity", "1"); 
});

function getInfo(infoId, elementId){

    var xmlHttp = new XMLHttpRequest();
    xmlHttp.onload = function(){
        if (xmlHttp.status == 200){
            var response = xmlHttp.responseText;
            $(elementId).html(response);
        }
    };

    var reqURL = "scripts/classInfo.php?infoId=" + infoId;

    xmlHttp.open("GET", reqURL, true);
    xmlHttp.send();
}

function updateClasses(){
    getInfo($("#selectSubject").val(), "#selectClass");
}

function updateContent(){
    getInfo($("#selectClass").val(), "#classContent");
} 

var lastHeight = $(window).scrollTop();
$(window).scroll(function(){
    var currentHeight = $(window).scrollTop();
    if (lastHeight < currentHeight){
        document.querySelector('nav').style.animation = 'navSlideUp 0.5s ease forwards';
    }
    else {
        document.querySelector('nav').style.animation = 'navSlideDown 0.5s ease forwards';
    }
    lastHeight = currentHeight;
});


$("#experience .languages").hover(
    function(){
        console.log("777");
        $("#experience .languages h2").css("opacity", "1");
        $("#experience .languages .line").css("opacity", "1");
        $("#experience .languages li").css("opacity", "1");
    },
    function(){
        $("#experience .languages h2").css("opacity", "0.3");
        $("#experience .languages .line").css("opacity", "0.3");
        $("#experience .languages li").css("opacity", "0.3");
    }
);

$("#experience .work").hover(
    function(){
        $("#experience .work h2").css("opacity", "1");
        $("#experience .work .line").css("opacity", "1");
        $("#experience .work h3").css("opacity", "1");
        $("#experience .work li").css("opacity", "1");
    },
    function(){
        $("#experience .work h2").css("opacity", "0.3");
        $("#experience .work .line").css("opacity", "0.3");
        $("#experience .work h3").css("opacity", "0.3");
        $("#experience .work li").css("opacity", "0.3");
    }
);


/* all code related to the responsive navbar learned from: https://www.youtube.com/watch?v=gXkqy0b4M5g */
$(".burger").click(function(){
    
    $(".mobile").toggleClass('mobile-active');
    
    var items = document.querySelectorAll('.mobile a');
    
    items.forEach(function(link, index){
        if (link.style.animation){
            link.style.animation = '';
        }
        else {
            link.style.animation = 'navItemFade 0.5s ease forwards ' + (index/5 + 0.5) + 's';
        }
    });
    
    $(".line1").toggleClass('burgerLine1-active');
    $(".line3").toggleClass('burgerLine3-active');
    setTimeout(function(){
        $(".line2").toggleClass('burgerLine2-active');
    }, 150);
    setTimeout(function(){
        $(".line1").toggleClass('burgerLine1-active-2');
        $(".line3").toggleClass('burgerLine3-active-2');
    }, 150);
});

$(document).scroll(function(){
    var items = document.querySelector('.mobile a');
    if (items.style.animation){
        $(".mobile").toggleClass('mobile-active');
    
        items = document.querySelectorAll('.mobile a');

        items.forEach(function(link){
            link.style.animation = '';
        });
        
        $(".line1").toggleClass('burgerLine1-active');
        $(".line3").toggleClass('burgerLine3-active');
        setTimeout(function(){
            $(".line2").toggleClass('burgerLine2-active');
        }, 150);
        setTimeout(function(){
            $(".line1").toggleClass('burgerLine1-active-2');
            $(".line3").toggleClass('burgerLine3-active-2');
        }, 150);
    }
});


//$("#aboutItem").click(function(){
//    scrollTo("name");
//});
//
//$("#experienceItem").click(function(){
//    scrollTo("experience");
//});
//
//$("#classesItem").click(function(){
//    scrollTo("classes");
//});
//
//$("#resumeItem").click(function(){
//    scrollTo("resume");
//});
//
//$("#contactItem").click(function(){
//    scrollTo("contact");
//});
//
//
//function scrollTo(elementId){
//    document.getElementById(elementId).scrollIntoView();
//}
