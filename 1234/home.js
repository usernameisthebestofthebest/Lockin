function btn() {
    const btn1 = document.getElementById("btn").value;
    alert("You sure you want to logout?");
    window.location = "login.php";
}

function tagak() {
    document.getElementById("tagak2").classList.toggle("show");
  }
  
  window.onclick = function(event) {
    if (!event.target.matches('.tagak1')) {
      var dropdowns = document.getElementsByClassName("tagak3");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }

  function searchandfound() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }       
    }
  }