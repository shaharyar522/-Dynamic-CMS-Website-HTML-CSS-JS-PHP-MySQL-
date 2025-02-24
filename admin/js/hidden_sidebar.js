document.addEventListener("DOMContentLoaded", function () {
    let sections = {
        dashboard: document.getElementById("dashboardSection"),
        sliderList: document.getElementById("sliderListSection")
    };

    let links = {
        dashboard: document.getElementById("dashboardLink"),
        sliderList: document.getElementById("sliderListLink")
    };

    // Initially hide all sections
    Object.values(sections).forEach(section => section.style.display = "none");

    // Function to show only one section at a time
    function showSection(selected) {
        Object.keys(sections).forEach(key => {
            if (key === selected) {
                sections[key].style.display = "block";
            } else {
                sections[key].style.display = "none";
            }
        });
    }

    // Event listeners for menu items
    links.dashboard.addEventListener("click", function (event) {
        event.preventDefault();
        showSection("dashboard");
        history.pushState(null, "", "index.php");
    });

    links.sliderList.addEventListener("click", function (event) {
        event.preventDefault();
        showSection("sliderList");
        history.pushState(null, "", "index.php?view=slider_list");
    });
});
