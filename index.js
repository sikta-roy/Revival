const axios = require("axios");

const url = "https://script.google.com/macros/s/AKfycbx9EHBqNvic2YtWPVwrDGcnhFCiOz552jIRbDAwRjAlLTGHUJWfkOo9z2D1VSROpxrdAw/exec";
const postData = {
  action: "signup",
  name: "John Doe",
  email: "john@example.com",
  password: "securepassword"
};

axios.post(url, postData)
  .then(response => {
    const result = response.data;
    if (result.status === "success") {
      console.log("Signup successful. Please login.");
    } else {
      console.error("Error:", result.message);
    }
  })
  .catch(error => {
    console.error("An error occurred:", error.message);
  });
