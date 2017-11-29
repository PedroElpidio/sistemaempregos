/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
window.onload = function () {
    var width = screen.width;
    var height = screen.height;
    var desktop = document.getElementById("css");
    if (width <= height){
        desktop.href = "css/mobile.css";
    };
};

