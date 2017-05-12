var EventEmitter = require('events').EventEmitter

var life = new EventEmitter()

life.setMaxListeners(11)

function water(who) {
    console.log('给 ' + who + ' ...1')
}

// addEventListener

//1
life.on('求安慰', water)

//2
life.on('求安慰', function(who) {
        console.log('给 ' + who + ' ...2')
    })
    //3
life.on('求安慰', function(who) {
        console.log('给 ' + who + ' ...3')
    })
    //4
life.on('求安慰', function(who) {
        console.log('给 ' + who + ' ...4')
    })
    //5
life.on('求安慰', function(who) {
        console.log('给 ' + who + ' ...5')
    })
    //6
life.on('求安慰', function(who) {
        console.log('给 ' + who + ' ...6')
    })
    //7
life.on('求安慰', function(who) {
        console.log('给 ' + who + ' ...7')
    })
    //8
life.on('求安慰', function(who) {
        console.log('给 ' + who + ' ...8')
    })
    //9
life.on('求安慰', function(who) {
        console.log('给 ' + who + ' ...9')
    })
    //10
life.on('求安慰', function(who) {
        console.log('给 ' + who + ' ...10')
    })
    //11
life.on('求安慰', function(who) {
        console.log('他妈的 ' + who + '！ 你想累死我啊！！！！')
    })
    //12
life.on('求溺爱', function(who) {
        console.log('给 ' + who + ' 买衣服')
    })
    //13
life.on('求溺爱', function(who) {
    console.log('给 ' + who + ' 交工资')
})

life.removeListener('求安慰', water)
life.removeAllListeners('求安慰')


var hasConforListener = life.emit('求安慰', '汉子')
var hasLoveListener = life.emit('求溺爱', '妹子')

console.log(life.listeners('求安慰').length)
console.log(EventEmitter.listenerCount(life, '求溺爱'))

//var hasPlayListener = life.emit('求玩坏', '妹子')




// console.log(hasConforListener)
// console.log(hasLoveListener)
// console.log(hasPlayListener)