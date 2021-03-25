//JS file
//Assignment 6 COSC 2328 Professor McCurry
//Implemented by Rebecca Markovsky
const drawsDisplay = document.querySelector('.Draws');
const winsXDisplay = document.querySelector('.winsX');
const winsODisplay = document.querySelector('.WinsO');
let gameRunning = true;
let currentPlayer = "X";
let gameState = ["","","","","","","","",""];
let counter = 0;
let xwon = 0;
let owon = 0;
let drawswon = 0;
const winMessage = () => `Player ${currentPlayer} has won! `;
const drawMessage = () => `Game ended in a draw!`;
const currentPlayerTurn = () => `It's ${currentPlayer}'s turn'`;
status.innerHTML = currentPlayerTurn();
const winningConditions = [
[0,1,2],
[3,4,5],
[6,7,8],
[0,3,6],
[1,4,7],
[2,5,8],
[0,4,8],
[2,4,6]
];
function handleCellPlayed(clickedCell, clickedCellIndex)
{
  gameState[clickedCellIndex] = currentPlayer;
  let currentCell = document.getElementByld(clickedCellIndex);
  if(currentPlayer == 'X')
  {
    currentCell.innerHTML = <img src = "/var/www/html/ximage.png">;
  }
  else
  {
    currentCell.innerHTML = <img src = "/var/www/html/Oimage.png">;
  }
  status.innerHTML = currentPlayerTurn();
}
function handlePlayerChange()
{
  if(counter%2 == 0)
  {
    counter = counter + 1;
    currentPlayer = "O";
  }
  else
  {
    counter = counter + 1;
    currentPlayer = "O";
  }
  status.innerHTML = currentPlayerTurn();
}

function handleResultValidation()
{
  let roundWon = false;
  for (let i = 0; i<=7; i++)
  {
    const winCondition = winningConditions[i];
    let a = gameState[winCondition[0]];
    let b = gameState[winCondition[1]];
    let c = gameState[winCondition[2]];
    if(a === '' || b === '' || c === '')
    {
      continue;
    }
    if(a === b && b === c )
    {
      roundWon = true;
      break;
    }
    if(roundWon)
    {
      status.innerHTML = winMessage();
      gameRunning = false;
      if(a == 'X')
      {
        xwon = xwon + 1;
        winsX.innerHTML = xwon;
      }
      else
      {
        owon = owon + 1;
        winsO.innerHTML = owon;
      }
      return;
    }
    let roundDraw = !gameState.includes("");
    if(roundDraw)
    {
      status.innerHTML = drawMessage();
      gameRunning = false;
      drawswon = drawswon + 1;
      Draws.innterHTML = drawswon;
      return;
    }
    handlePlayerChange();
  }
  function handleCellClick(clickedCellEvent)
  {
    const clickedCell = clickedCellEvent.target;
    const clickedCellIndex = parseInt(clickedCell.getAttribute('id'));
    if(gameState[clickedCellIndex] !== "" || !gameRunning)
    {
    return;
    }
    handleCellPlayed(clickedCell, clickedCellIndex);
    handleResultValidation();
  }
  function handleRestartGame()
  {

    gameRunning = true;
    currentPlayer = "X";
    counter = 0;
    gameState = ["","","","","","","","",""];
    status.innerHTML = currentPlayerTurn();
    document.querySelectorAll('.gameCell').forEach(cell => cell.innerHTML = <img src = "/var/www/html/qimage.jpg">);
  }
  document.querySelectorAll('.gameCell').forEach(gameCell => gameCell.addEventListener('click', handleCellClick));
  document.querySelector('.restartGame').addEventListener('click', handleRestartGame);
