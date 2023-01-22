"use strict";

const hamburgerBtn = document.querySelector(".hamburger");
const nav = document.querySelector(".nav-bar");
const allNavItems = document.querySelectorAll(".nav__item");

const handleNav = () => {
    nav.classList.toggle("active");
    allNavItems.forEach((item) => {
        item.addEventListener("click", () => {
            nav.classList.remove("active");
        });
    });
};

hamburgerBtn.addEventListener("click", handleNav);
