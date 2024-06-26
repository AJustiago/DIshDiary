<?php include '../../components/header/header.php'; ?>

<div class="py-5 mx-5">
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <input class="form-control" type="file" id="formFile" accept="image/*">
            </div>
            <div id="imagePreview" class="mb-3" style="height: 500px; width: 100%; background-color: #f8f9fa; display: flex; align-items: center; justify-content: center;">
                <img id="imageDisplay" src="" class="img-fluid" style="max-height: 500px; max-width: 100%; display: none;" alt="Selected Image">
                <span id="defaultBoxText" style="color: #6c757d; font-size: 24px;">No image selected</span>
            </div>
        </div>
        <div class="col-6">
            <div class="row">
                <div class="mb-3 col-6">
                    <input type="text" class="form-control" id="nameInput" placeholder="Enter Name">
                </div>
                <div class="mb-3 col-6 pt-2">
                    <label for="difficultySelect" class="form-label">Difficulty: </label>
                    <select class="form-select" id="difficultySelect">
                        <option value="beginner">Beginner</option>
                        <option value="intermediate">Intermediate</option>
                        <option value="expert">Expert</option>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <textarea class="form-control" id="recipeDescription" rows="16" placeholder="Enter recipe description"></textarea>
            </div>
            <div class="row mb-3">
                <div class="col-3">
                    <label for="totalTime" class="form-label">Total Time</label>
                </div>
                <div class="col-6">
                    <input type="number" class="form-control" id="time" placeholder="Total Time">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-3 mr-3">
                    <label for="category" class="form-label">Category</label>
                </div>
                <div class="justify-content-between d-flex align-items-center">
                    <div class="form-check col-4">
                        <input class="form-check-input" type="radio" name="mealType" id="mainDish" value="Main Dish">
                        <label class="form-check-label" for="mainDish">Main Dish</label>
                    </div>
                    <div class="form-check col-4">
                        <input class="form-check-input" type="radio" name="mealType" id="saladSoup" value="Salad/Soup">
                        <label class="form-check-label" for="saladSoup">Salad/Soup</label>
                    </div>
                    <div class="form-check col-4">
                        <input class="form-check-input" type="radio" name="mealType" id="beverages" value="Beverages">
                        <label class="form-check-label" for="beverages">Beverages</label>
                    </div>
                    <div class="form-check col-4">
                        <input class="form-check-input" type="radio" name="mealType" id="desserts" value="Desserts">
                        <label class="form-check-label" for="desserts">Desserts</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 my-4"  id="ingredientsContainer">
            <h2 style="border-bottom: 4px solid #C84C02;">Ingredients</h2>
            <div class="row mb-3">
                <div class="col-10">
                    <input type="text" class="form-control" id="ingredients" placeholder="Enter Ingredients">
                </div>
                <button type="button" class="btn btn-primary col-1 add-ingredients"><i class="fa fa-plus" aria-hidden="true"></i></button>
            </div>
        </div>
        <div class="col-6 my-4" id="directionsContainer">
            <h2 style="border-bottom: 4px solid #C84C02;">Directions</h2>
            <div class="row mb-3">
                <div class="col-10">
                    <input type="text" class="form-control" id="directions" placeholder="Enter Directions">
                </div>
                <button type="button" class="btn btn-primary col-1 add-directions"><i class="fa fa-plus" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>
    <div class="row"> 
        <div class="col-12 d-flex justify-content-end my-4">
            <a type="button" class="btn btn-primary mx-4" href="../../pages/recipes/recipes.php">Cancel</a>
            <button type="button" class="btn btn-outline-primary">Save & Publish</button>
        </div>
    </div>
</div>

<script>
    document.getElementById('formFile').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const imagePreview = document.getElementById('imagePreview');
        const imageDisplay = document.getElementById('imageDisplay');
        const defaultBoxText = document.getElementById('defaultBoxText');

        if (file) {
            const fileType = file.type;
            const validImageTypes = ["image/jpeg", "image/png", "image/gif"];

            if (validImageTypes.includes(fileType)) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imageDisplay.src = e.target.result;
                    imageDisplay.style.display = 'block';
                    defaultBoxText.style.display = 'none';
                }
                reader.readAsDataURL(file);
            } else {
                imagePreview.style.display = 'flex';
                imageDisplay.style.display = 'none';
                defaultBoxText.style.display = 'block';
            }
        } else {
            imagePreview.style.display = 'flex';
            imageDisplay.style.display = 'none';
            defaultBoxText.style.display = 'block';
        }
    });

    document.querySelector('.add-ingredients').addEventListener('click', function() {
        const ingredientsContainer = document.getElementById('ingredientsContainer');

        const newRow = document.createElement('div');
        newRow.className = 'row mb-3';

        const newCol = document.createElement('div');
        newCol.className = 'col-10';
        const newInput = document.createElement('input');
        newInput.type = 'text';
        newInput.className = 'form-control';
        newInput.placeholder = 'Enter Ingredients';
        newCol.appendChild(newInput);

        const newButtonCol = document.createElement('div');
        newButtonCol.className = 'col-1';
        const newButton = document.createElement('button');
        newButton.type = 'button';
        newButton.className = 'btn btn-danger remove-ingredient px-3';
        newButton.innerHTML = '<i class="fa fa-trash" aria-hidden="true"></i>';
        newButtonCol.appendChild(newButton);

        newRow.appendChild(newCol);
        newRow.appendChild(newButtonCol);

        ingredientsContainer.appendChild(newRow);

        newButton.addEventListener('click', function() {
            ingredientsContainer.removeChild(newRow);
        });
    });

    document.querySelector('.add-directions').addEventListener('click', function() {
        const directionsContainer = document.getElementById('directionsContainer');

        const newRow = document.createElement('div');
        newRow.className = 'row mb-3';

        const newCol = document.createElement('div');
        newCol.className = 'col-10';
        const newInput = document.createElement('input');
        newInput.type = 'text';
        newInput.className = 'form-control';
        newInput.placeholder = 'Enter Directions';
        newCol.appendChild(newInput);

        const newButtonCol = document.createElement('div');
        newButtonCol.className = 'col-1';
        const newButton = document.createElement('button');
        newButton.type = 'button';
        newButton.className = 'btn btn-danger remove-directions px-3';
        newButton.innerHTML = '<i class="fa fa-trash" aria-hidden="true"></i>';
        newButtonCol.appendChild(newButton);

        newRow.appendChild(newCol);
        newRow.appendChild(newButtonCol);

        directionsContainer.appendChild(newRow);

        newButton.addEventListener('click', function() {
            directionsContainer.removeChild(newRow);
        });
    });
</script>

<?php include '../../components/footer/footer.php'; ?>
