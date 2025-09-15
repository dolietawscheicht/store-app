// export const cart = new Proxy(
// 	{
// 		value: initiateCart(),
// 	},
// 	{
// 		set(target, property, newValue) {
// 			target[property] = newValue;

// 			updateCartObservers(newValue);

// 			return true;
// 		},
// 	}
// );

// function initiateCart() {
// 	return JSON.parse(localStorage.getItem("cart")) || [];
// }

// function updateCartObservers(newValue) {
// 	localStorage.setItem("cart", JSON.stringify(newValue));

// 	const cartMessage = document.getElementById("cart-message");
// 	if (cartMessage) {
// 		cartMessage.classList.remove("hidden");
// 		setTimeout(() => cartMessage.classList.add("hidden"), 1000);
// 	}

// 	const addToCartButton = document.querySelector("#add-to-cart-form button");
// 	if (addToCartButton) {
// 		addToCartButton.classList.add("hidden");
// 		setTimeout(() => addToCartButton.classList.remove("hidden"), 1000);
// 	}
// }
