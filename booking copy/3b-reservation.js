var reserve = {
  toggle: seat => {
    seat.classList.toggle("selected");
    updateTotalPrice();
  },

  save: () => {
    var selected = document.querySelectorAll("#layout .selected");

    if (selected.length === 0) {
      alert("No seats selected.");
    } else {
      var ninja = document.getElementById("ninja");
      for (let seat of selected) {
        let input = document.createElement("input");
        input.type = "hidden";
        input.name = "seats[]";
        input.value = seat.innerHTML;
        ninja.appendChild(input);
      }

      ninja.submit();
    }
  },
};

function updateTotalPrice() {
  var selectedSeats = document.querySelectorAll("#layout .selected");
  var totalSpan = document.getElementById("total");
  var countSpan = document.getElementById("count");
  var totalPrice = selectedSeats.length * 500; // 500 is the price per seat for every movie
  totalSpan.textContent = totalPrice;
  countSpan.textContent = selectedSeats.length; // seat count
}
