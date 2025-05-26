"use strict";

//ローディング画面
const loading = document.querySelector(".loading");

window.addEventListener("load", () => {
  setTimeout(() => {
    loading.classList.add("loaded");
  }, 1000);
});
////

//チャットGPT(動く猫？)
document.addEventListener("DOMContentLoaded", function () {
  let cat = document.querySelector(".cat");
  let position = -100; // 初期位置（画面外）
  let speed = 1; // 歩くスピード

  function walk() {
    position += speed;
    cat.style.left = position + "px";

    // 画面外に出たらリセット
    if (position > window.innerWidth) {
      position = -100;
    }

    requestAnimationFrame(walk);
  }

  walk();
});
////

//カードガチャ

const carousel = document.getElementById("carousel");
const spinButton = document.getElementById("spinButton");
const resultMessage = document.getElementById("resultMessage");
const cardCount = 10; //カードの枚数
const radius = 200; //カードの間隔
let angle = 0;

// **カードを配置**
const cards = [];
for (let i = 0; i < cardCount; i++) {
  const card = document.createElement("div");
  card.classList.add("card");
  card.textContent = `Karte ${i + 1}`;

  const cardAngle = (i / cardCount) * 360;
  card.style.transform = `rotateY(${cardAngle}deg) translateZ(${radius}px)`;
  carousel.appendChild(card);
  cards.push(card);
}

// **スクロールで回転**
window.addEventListener("scroll", () => {
  angle = window.scrollY * 0.3;
  carousel.style.transform = `rotateY(${angle}deg)`;
});

// **ガチャボタンを押したときの動作**
// **ガチャボタンを押したときの動作**
spinButton.addEventListener("click", () => {
  spinButton.disabled = true; // ボタン無効化

  // **ランダムな当たりカードを選ぶ**
  const randomIndex = Math.floor(Math.random() * cardCount);
  const selectedCard = cards[randomIndex];

  // **当たりカードを正面に持ってくるための回転角度調整**
  const cardAngle = (randomIndex / cardCount) * 360;
  const targetAngle = 360 - cardAngle; // 正面に持ってくる

  // **カルーセルを回転させる**
  angle += 1440 + targetAngle; // 4回転 + 当たりカードを正面に
  carousel.style.transition = "transform 4s ease-out";
  carousel.style.transform = `rotateY(${angle}deg)`;

  // **結果を4秒後に表示**
  setTimeout(() => {
    // **全カードのハイライトをリセット**
    cards.forEach((card) => card.classList.remove("highlight"));

    // **当たりカードを画面中央に移動**
    selectedCard.classList.add("highlight");

    // **結果メッセージを表示**
    resultMessage.textContent = `当たり: ${selectedCard.textContent}！`;
    resultMessage.classList.add("show");

    // **履歴に追加**
    addHistory(selectedCard.textContent);

    // **5秒後にリセット**
    setTimeout(() => {
      resultMessage.classList.remove("show");
      selectedCard.classList.remove("highlight");
      spinButton.disabled = false;
    }, 5000);
  }, 4000);
});

// **履歴を追加する関数**
let historyListData = []; // 履歴データ（配列）

function addHistory(text) {
  historyListData.unshift(text); // 新しい当たりを先頭に追加
  if (historyListData.length > 5) historyListData.pop(); // 最大5件まで保持

  historyList.innerHTML = ""; // 履歴をクリアして再描画
  historyListData.forEach((item) => {
    const li = document.createElement("li");
    li.textContent = item;
    historyList.appendChild(li);
  });
}

////

//カードガチャ・スクロール用
let isScrolling = false;
window.addEventListener("wheel", (event) => {
  if (!isScrolling) {
    isScrolling = true;
    angle += event.deltaY * 0.1; // スクロール量を角度に変換
    requestAnimationFrame(() => {
      carousel.style.transform = `rotateY(${angle}deg)`;
      isScrolling = false;
    });
  }
});
////

//10回ガチャ用
document.addEventListener("DOMContentLoaded", () => {
  const wrapper = document.querySelector(".wrapper");
  const box = document.querySelector(".button-R");

  const limit = 80; // 移動できる最大距離（px）

  wrapper.addEventListener("mousemove", (event) => {
    const rect = wrapper.getBoundingClientRect();
    const centerX = rect.left + rect.width / 5;
    const centerY = rect.top + rect.height / 5;

    // マウスと中央の距離を計算
    let offsetX = event.clientX - centerX;
    let offsetY = event.clientY - centerY;

    // 移動距離を制限
    offsetX = Math.max(-limit, Math.min(limit, offsetX));
    offsetY = Math.max(-limit, Math.min(limit, offsetY));

    // 要素を移動（中央基準のため -50% を加える）
    box.style.transform = `translate(${offsetX - 50}%, ${offsetY - 50}%)`;
  });

  // マウスが離れたら元の位置に戻る
  wrapper.addEventListener("mouseleave", () => {
    box.style.transform = "translate(-50%, -50%)";
  });
});
/////

document.getElementById("toggleButton").addEventListener("click", function () {
  let text = document.getElementById("hiddenText");
  if (text.style.display === "none" || text.style.display === "") {
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
});
