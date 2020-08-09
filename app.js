let myrequest = new Request("./data.json");

fetch(myrequest)
  .then (function(resp){
    return resp.json();
   }) 
   .then(function(data){
      console.log(data.GameData);

   });

  
    //var data = { employees: [] }   // initially empty

//data.employees.push( {
  //firstName: 'John',
  //lastName: 'Doe'
//} );
// have game saved contents 


var cardsWon = []

//card options
var cardArray = [
  {
    name: 'fries',
    img: 'images/fries.png'
  },
  {
    name: 'cheeseburger',
    img: 'images/cheeseburger.png'
  },
  {
    name: 'ice-cream',
    img: 'images/ice-cream.png'
  },
  {
    name: 'pizza',
    img: 'images/pizza.png'
  },
  {
    name: 'milkshake',
    img: 'images/milkshake.png'
  },
  {
    name: 'hotdog',
    img: 'images/hotdog.png'
  },
  {
    name: 'fries',
    img: 'images/fries.png'
  },
  {
    name: 'cheeseburger',
    img: 'images/cheeseburger.png'
  },
  {
    name: 'ice-cream',
    img: 'images/ice-cream.png'
  },
  {
    name: 'pizza',
    img: 'images/pizza.png'
  },
  {
    name: 'milkshake',
    img: 'images/milkshake.png'
  },
  {
    name: 'hotdog',
    img: 'images/hotdog.png'
  }
]

   
cardArray.sort(() => 0.5 - Math.random())
document.addEventListener('DOMContentLoaded', () => {
  
  grid = document.querySelector('.grid')
  resultDisplay = document.querySelector('#result')

   
  var cardsChosen = []
  var cardsChosenId = []
  

  //create your board
  function createBoard() {
    for (let i = 0; i < cardArray.length; i++) {
      var card = document.createElement('img')
      card.setAttribute('src', 'images/greenbackground.png')
      card.setAttribute('data-id', i)
      card.addEventListener('click', flipCard)
      grid.appendChild(card)
    }
  }
  
  //check for matches
  function checkForMatch() {
    var cards = document.querySelectorAll('img')
    const optionOneId = cardsChosenId[0]
    const optionTwoId = cardsChosenId[1]

    if(optionOneId == optionTwoId) {
      cards[optionOneId].setAttribute('src', 'images/greenbackground.png')
      cards[optionTwoId].setAttribute('src', 'images/greenbackground.png')
      alert('You have clicked the same image!')
    }
    else if (cardsChosen[0] === cardsChosen[1]) {
      alert('You found a match')
      cards[optionOneId].setAttribute('src', 'images/white.png')
      cards[optionTwoId].setAttribute('src', 'images/white.png')
      cards[optionOneId].removeEventListener('click', flipCard)
      cards[optionTwoId].removeEventListener('click', flipCard)
      cardsWon.push(cardsChosen)
    } else {
      cards[optionOneId].setAttribute('src', 'images/greenbackground.png')
      cards[optionTwoId].setAttribute('src', 'images/greenbackground.png')
      alert('Sorry, try again')
    }
    cardsChosen = []
    cardsChosenId = []
    resultDisplay.textContent = cardsWon.length;
    if  (cardsWon.length === cardArray.length/2) {
      resultDisplay.textContent = 'Congratulations! You found them all!'
    }
  }

  //flip your card
  function flipCard() {
    var cardId = this.getAttribute('data-id')
    cardsChosen.push(cardArray[cardId].name)
    cardsChosenId.push(cardId)
    this.setAttribute('src', cardArray[cardId].img)
    if (cardsChosen.length ===2) {
      setTimeout(checkForMatch, 500);
    }
  }
  
  
  createBoard();
  
  
})
function save1() {

    alert("ERROR: Please make an account to save");
}
function saveGame(){
  //data.employees.push( {
    //firstName: 'John',
    //lastName: 'Doe'
  //} );
  data.cardsWon,push({})
  localStorage.setItem("cardArray",JSON.stringify(cardArray));
  localStorage.setItem("cardsWon",JSON.stringify(cardsWon) );
 alert("game saved");
}

function loadGame(){
  localStorage.getItem();

}
