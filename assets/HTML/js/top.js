"use strict";

// 監視対象のセクション要素を取得
const sections = document.querySelectorAll(".section");
// ナビゲーションリストを取得
const listItems = document.querySelectorAll(".list li");

// Intersection Observer のオプション
const options = {
  root: null, // ビューポートを基準
  threshold: 0.5, // 50%見えたら反応
};

// Intersection Observer のコールバック関数
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      // 表示された要素の ID を取得
      let targetId = entry.target.id;

      // リストアイテムの色を変更
      listItems.forEach((item) => {
        if (item.dataset.target === targetId) {
          item.classList.add("active");
        } else {
          item.classList.remove("active");
        }
      });
    }
  });
}, options);

// 各セクションを監視対象に追加
sections.forEach((section) => observer.observe(section));

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

document.getElementById("toggleButton").addEventListener("click", function () {
  let text = document.getElementById("hiddenText");
  if (text.style.display === "none" || text.style.display === "") {
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
});

//仮想ページボタン
const card = document.querySelector(".dewegen");

document.addEventListener("mousemove", (event) => {
  const { clientX, clientY } = event;
  const { innerWidth, innerHeight } = window;

  // 画面の中心からの相対位置 (-1 ～ 1)
  const xRatio = (clientX / innerWidth) * 2 - 1;
  const yRatio = (clientY / innerHeight) * 2 - 1;

  // 回転角度（調整可能）
  const rotateX = yRatio * 20; // 上下方向の回転
  const rotateY = xRatio * -20; // 左右方向の回転

  // transformの適用
  card.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
});
