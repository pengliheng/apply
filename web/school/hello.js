//test.js
//process.nextTick()将在下一轮事件循环中调用

var fs = require('fs')
fs.readFile('123.png', function(err, data) {
    if (err) {
        console.log(err)
    } else {
        console.log(data)
        console.log(data.length + "bytes")
    }
})