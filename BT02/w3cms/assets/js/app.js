let listElements = document.querySelectorAll(".has-arrow");
let btnElement = document.querySelector(".filter__btn");
let filterBtn = document.querySelector(".filter__title");
let filterElement = document.querySelector(".filter__body");
let btnLanguage = document.querySelector(".footer__nav--item");
let languageElements = document.querySelector(".footer__subnav");
let checkboxElement = document.querySelector(".primary__checkbox");
let dropdownBtns = document.querySelectorAll(".sidebar__body > li");
let sidebarElement = document.querySelector(".sidebar");

function collapseHandler(firstElement, secondElement = "", className) {
	firstElement.onclick = () => {
		if (!firstElement.classList.contains(className)) {
			firstElement.classList.add(className);
			if (secondElement) secondElement.classList.add(className);
		} else {
			firstElement.classList.remove(className);
			if (secondElement) secondElement.classList.remove(className);
		}
	};
}
function eventHandler(
	firstElement,
	secondElement = "",
	className,
	secondClass = ""
) {
	firstElement.forEach((element) => {
		element.onclick = function (event) {
			event.preventDefault();
			if (!this.classList.contains(className)) {
				firstElement.forEach((item) => {
					item.classList.remove(className);
				});
				this.classList.add(className);
				secondElement.classList.add(secondClass);
			} else {
				this.classList.remove(className);
				secondElement.classList.remove(secondClass);
			}
		};
	});
}

collapseHandler(btnElement, filterElement, "collapse");
collapseHandler(btnLanguage, languageElements, "collapse");
collapseHandler(filterBtn, filterElement, "collapse");

eventHandler(listElements, null, "active", null);
eventHandler(dropdownBtns, sidebarElement, "active", "square");

checkboxElement.onclick = function () {
	let elements = document.querySelectorAll(".content_checkbox");
	if (checkboxElement.checked) {
		elements.forEach((element) => {
			element.checked = true;
		});
	} else {
		elements.forEach((element) => {
			element.checked = false;
		});
	}
};

let notifyElements = document.querySelectorAll(".dropdown__item");
notifyElements.forEach((element) => {
	if (element.classList.contains("orange")) {
		element.style.setProperty("--color", "#FF6A59");
		element.style.setProperty("--secondary-color", "#fcbbbc");
	} else if (element.classList.contains("blue")) {
		element.style.setProperty("--color", "#58BAD7");
		element.style.setProperty("--secondary-color", "#d3edf5");
	} else if (element.classList.contains("yellow")) {
		element.style.setProperty("--color", "#F0A901");
		element.style.setProperty("--secondary-color", "#fff8e7");
	} else if (element.classList.contains("green")) {
		element.style.setProperty("--color", "#56c760");
		element.style.setProperty("--secondary-color", "#c9edcc");
	} else if (element.classList.contains("grey")) {
		element.style.setProperty("--color", "#374557");
		element.style.setProperty("--secondary-color", "#eee");
	}
});
