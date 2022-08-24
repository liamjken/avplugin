function tog_off_yby() {
        var x = document.getElementById("tog-yby");
        var btn_yby = document.getElementById("btn-yby");
        if (x.style.display === "block") {
            btn_yby.innerHTML = `<i class="stm-icon-car_search"></i><span class="h4">Show Search Options</span>`;
          x.style.display = "none";
        } else {
          x.style.display = "block";
          btn_yby.innerHTML = `<i class="stm-icon-car_search"></i><span class="h4">Hide Search Options</span>`;
        }
      }