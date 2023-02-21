//     let cpt = 0;
//     let left = document.querySelector('.left');
//     let right = document.querySelector('.right');
//     let contents = document.querySelector('.contents');
//     let slider = document.querySelector('.slider');
    
// if (contents) {
        
//     let sliders = Array.from(contents.children);
//     let screenWidth = slider.getBoundingClientRect().width;
//     right.addEventListener('click', avance);
//     left.addEventListener('click', recule);
//     let clock = setInterval(avance, 4000);
//     window.addEventListener('resize', () => {
//         screenWidth = slider.getBoundingClientRect().width;
//     })
//     slider.addEventListener('mouseover', stop);
//     slider.addEventListener('mouseout', start);

// function avance() {
//         cpt++;
//         if (cpt === sliders.length - 1) {
//             cpt = 0;
//         }
//         let decal = -screenWidth * cpt;
//         contents.style.transform = `translateX(${decal}px)`
//     }

// function recule() {
//         cpt--;
//         if (cpt < 0) {
//             cpt = sliders.length - 1;
//         }
//         let decal = -screenWidth * cpt;
//         contents.style.transform = `translateX(${decal}px)`
//     }

// function stop() {
//         clearInterval(clock);
//     }

// function start() {
//         console.log("inside start")
//         clock = setInterval(avance, 4000);
//     }
// }

document.getElementById("logout").addEventListener("click", function () {
    console.log("click")

    if (confirm("Voulez-vous vraiment vous déconnecter ?")) {
        location.href = "deconnexion.php";
    }
});

    const toggle = document.getElementById('toggle');
    const ball = document.getElementById('ball');

    toggle.addEventListener('click', () => {

        if (ball.style.left == "3px") {
        ball.style.left = "25px";
        ball.style.transition = ".3s linear";
    }

    else {
        ball.style.left = "3px";
        ball.style.transition = ".3s linear";
    }

    function DarkMode() {
        if (ball.style.left == "3px") {

            document.body.style.backgroundColor = "white";
            document.body.style.transition = ".3s linear";
            document.getElementById("navbar").style.backgroundColor = "#262626";
            document.getElementById("navbar").style.color = "white";
            document.getElementById("logout").style.color = "black";
            document.getElementById("started").style.color = "black";
            document.getElementById("end").style.color = "black";
            document.getElementsByClassName("titrePage")[0].style.color = "black";

        } else if (ball.style.left == "25px") {

            document.body.style.backgroundColor = "#262626";
            document.body.style.transition = ".3s linear";
            document.getElementById("navbar").style.backgroundColor = "white";
            document.getElementById("navbar").style.color = "#262626";
            document.getElementById("logout").style.color = "white";
            document.getElementById("started").style.color = "white";
            document.getElementById("end").style.color = "white";
            document.getElementsByClassName("titrePage")[0].style.color = "white";
        }
    }
    DarkMode();
    });








