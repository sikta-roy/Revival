document.getElementById("bookTestButton").addEventListener("click", () => {
  const fullName = document.getElementById("fullName").value;
  const testType = document.getElementById("testType").value;

  const confirmation = confirm(`Are you sure you want to book a ${testType} Test for ${fullName}?`);

  if (confirmation) {
    console.log("Booking confirmed.");
    alert("Booking confirmed. We will contact you soon."); // Display a confirmation message
  } else {
    console.log("Booking canceled.");
  }
});
