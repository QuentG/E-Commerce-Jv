//Selection des catégories
function sortProduct() {
    var self = $("#product");
    if (self.val() == "ActionPS4") {
        for (products of document.getElementsByClassName('product')) {
            if (products.classList.contains('ActionPS4')) {
                products.style.display = "block";
            } else {
                products.style.display = "none";
            }
        }
    } else if (self.val() == "AventurePS4") {
        for (products of document.getElementsByClassName('product')) {
            if (products.classList.contains('AventurePS4')) {
                products.style.display = "block";
            } else {
                products.style.display = "none";
            }
        }
    } else if (self.val() == "SportPS4") {
        for (products of document.getElementsByClassName('product')) {
            if (products.classList.contains('SportPS4')) {
                products.style.display = "block";
            } else {
                products.style.display = "none";
            }
        }
    } else if (self.val() == "CombatPS4") {
        for (products of document.getElementsByClassName('product')) {
            if (products.classList.contains('CombatPS4')) {
                products.style.display = "block";
            } else {
                products.style.display = "none";
            }
        }
    } else {
        for (products of document.getElementsByClassName('product')) {
            products.style.display = "block";
        }
    }
}

    $("#product").change(function(){
    sortProduct();
    });
