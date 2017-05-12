var http = require('http')
var querystring = require('querystring')

var postData = querystring.stringify({
    'content': '一起期待下一期的课程',
    'cid': 348
})

var options = {
    hostname: 'www.imooc.com',
    port: 80,
    path: '/course/document',
    method: 'POST',
    headers: {
        'Accept': 'application/json, text/javascript, */*; q=0.01',
        'Accept-Encoding': 'gzip, deflate',
        'Accept-Language': 'zh-CN,zh;q=0.8',
        'Connection': 'keep-alive',
        'Content-Length': postData.length,
        'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
        'Cookie': 'imooc_uuid=56721b0e-f59e-4c6d-8165-40595c4b6103; imooc_isnew_ct=1493878158; loginstate=1; apsid=MzYzY4YmNhY2Y0NzMwNzRmNDBjNGYxYjk2MWUxYjEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAANTIzOTkyNgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADdjZDhhNzc4ZTgxYjY0Y2JhMWNiNzdhZmVmNDAyODVmjMYKWYzGClk%3DZD; PHPSESSID=g58f5p36dd96ast5qoeapn7a17; IMCDNS=0; Hm_lvt_f0cfcccd7b1393990c78efdeebff3968=1494006280,1494057593,1494057767,1494061497; Hm_lpvt_f0cfcccd7b1393990c78efdeebff3968=1494150955; imooc_isnew=2; cvde=590cb390ad62a-242',
        'Host': 'www.imooc.com',
        'Origin': 'http://www.imooc.com',
        'Referer': 'http://www.imooc.com/comment/348',
        'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.96 Safari/537.36',
        'X-Requested-With': 'XMLHttpRequest'
    }
}


var req = http.request(options, function(res) {
    console.log('status: ' + res.statusCode)
    console.log('headers: ' + JSON.stringify(res.headers))

    res.on('data', function(chunk) {
        console.log(Buffer.isBuffer(chunk))
        console.log(typeof chunk)
    })

    res.on('end', function() {
        console.log('评论完毕！')
    })
})

req.on('error', function(e) {
    console.log('Error: ' + e.message)
})

req.write(postData)
req.end()