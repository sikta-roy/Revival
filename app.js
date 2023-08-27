const express = require("express");
const path = require("path");
const app = express();
require("./src/db/patient");

const port = process.env.PORT || 3000;

const static_path = path.join(__dirname, "../public")
app.use(express.static(static_path));

app.get("/",(req,res) => {
    res.send("Hello")
});

app.listen(port,() =>{
    console.log(`server is running at port no ${port}`);
})