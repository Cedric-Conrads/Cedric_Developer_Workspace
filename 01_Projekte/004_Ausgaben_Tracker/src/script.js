const expenseNameInput = document.getElementById("expense-name");
const expenseAmountInput = document.getElementById("expense-amount");
const addBtn = document.getElementById("add-btn");
const feedback = document.getElementById("feedback");
const totalText = document.getElementById("total");
const expenseList = document.getElementById("expense-list");

let total = 0;

addBtn.addEventListener("click", function () {
    const expenseName = expenseNameInput.value.trim();
    const expenseAmount = Number(expenseAmountInput.value);

    if (expenseName === "" || expenseAmount <= 0) {
        feedback.textContent = "Bitte gib eine Ausgabe und einen gültigen Betrag ein.";
        return;
    }

    total = total + expenseAmount;
    totalText.textContent = total;

    const listItem = document.createElement("li");
    listItem.className = "expense-item";

    listItem.innerHTML = `
        <div>
            <span class="expense-name">${expenseName}</span>
            <span class="expense-amount">${expenseAmount} €</span>
        </div>
        <button class="delete-btn">Löschen</button>
    `;

    const deleteBtn = listItem.querySelector(".delete-btn");

    deleteBtn.addEventListener("click", function () {
        total = total - expenseAmount;
        totalText.textContent = total;

        listItem.remove();
    });

    expenseList.appendChild(listItem);

    expenseNameInput.value = "";
    expenseAmountInput.value = "";
    feedback.textContent = "";
});