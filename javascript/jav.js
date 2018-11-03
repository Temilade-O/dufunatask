
var person = {
    name: ['Temilade', 'Olatoyosi'],
    age: '28',
    gender: 'Female',
    interests: ['sightseeing', 'trying out new recipes'],
    bio: function() {
    alert(this.name[0] + ' ' + this.name[1] + ' is ' + this.age +
    ' years old. She likes ' + this.interests[0] + ' and ' +
    this.interests[1] + '.');
    },
    greeting: function() {
    alert('Hi! I\'m ' + this.name[0] + '.');
    }
    };