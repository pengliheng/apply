function Pet(worss) {
    this.words = words
    this.speak = function(say) {
        console.log(say + ' ' + this.words)
    }
}

function Dog(words) {
    Pet.call(this, words)
        // Pet.apply(this,arguments)
}

var dog = new Dog('wang')

dog.speak()