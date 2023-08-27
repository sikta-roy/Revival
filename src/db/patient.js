const mongoose = require("mongoose");

mongoose.connect("mongodb://127.0.0.1:27017/Revival",{
    useNewUrlParser:true,
    useUnifiedTopology:true
}).then(()=>{
    console.log(`connection success`);
}).catch((e)=>{
    console.log(`connection error: ${e}`);
})
