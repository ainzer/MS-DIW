// script.js
const player1 = 'X';
const player2 = 'O';
let currentPlayer = player1;
let gameBoard = ['', '', '', '', '', '', '', '', ''];
let gameOver = false;

const cells = document.getElementById('game-board');
const result = document.getElementById('result');
const restartBtn = document.getElementById('restart-btn');

// Create game board cells
for (let i = 0; i < 9; i++) {
  const cell = document.createElement('div');
  cell.className = 'cell';
  cell.dataset.index = i;
  cell.addEventListener('click', cellClick);
  cells.appendChild(cell);
}

restartBtn.addEventListener('click', restartGame);

function cellClick(event) {
  const index = event.target.dataset.index;

  if (!gameBoard[index] && !gameOver) {
    gameBoard[index] = currentPlayer;
    event.target.textContent = currentPlayer;

    if (checkWinner()) {
      result.textContent = `Joueur ${currentPlayer} a gagné !`;
      gameOver = true;
    } else if (gameBoard.every(cell => cell !== '')) {
      result.textContent = 'Match nul !';
      gameOver = true;
    } else {
      currentPlayer = currentPlayer === player1 ? player2 : player1;
    }
  }
}

function checkWinner() {
  const winPatterns = [
    [0, 1, 2], [3, 4, 5], [6, 7, 8], // rows
    [0, 3, 6], [1, 4, 7], [2, 5, 8], // columns
    [0, 4, 8], [2, 4, 6] // diagonals
  ];

  for (const pattern of winPatterns) {
    const [a, b, c] = pattern;
    if (gameBoard[a] && gameBoard[a] === gameBoard[b] && gameBoard[a] === gameBoard[c]) {
      return true;
    }
  }

  return false;
}

function restartGame() {
  gameBoard = ['', '', '', '', '', '', '', '', ''];
  currentPlayer = player1;
  gameOver = false;
  result.textContent = '';
  cells.childNodes.forEach(cell => {
    cell.textContent = '';
  });
}
