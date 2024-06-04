<?php include '../../components/header/header.php'; ?>

<div class="py-5 mx-5">
    <div class="row">
        <div class="col-6">
            <div id="imagePreview" class="mb-3" style="height: 500px; width: 100%; background-color: #f8f9fa; display: flex; align-items: center; justify-content: center;">
                <img id="imageDisplay" src="../../assets/img/beef_wellington.jpeg" class="img-fluid" style="max-height: 500px; max-width: 100%; display: block; object-fit: contain;" alt="Selected Image">
            </div>
        </div>
        <div class="col-6">
            <div class="row">
                <div class="mb-3 col-6">
                    <input type="text" class="form-control" id="nameInput" placeholder="Enter Name" readonly value="Beef Wellington">
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
                <textarea class="form-control" id="recipeDescription" rows="16" placeholder="Enter recipe description" readonly>hidangan klasik yang memadukan kelezatan daging sapi dengan keanggunan puff pastry. Hidangan ini terdiri dari potongan daging sapi filet mignon yang empuk, dilapisi dengan campuran jamur cincang (duxelles) dan prosciutto, kemudian dibungkus dalam lapisan puff pastry yang renyah dan dipanggang hingga keemasan. Setiap gigitan menawarkan perpaduan tekstur dan rasa yang tak tertandingi. pilihan sempurna untuk acara-acara istimewa atau makan malam yang mewah. Sajikan dengan saus Madeira atau red wine untuk pengalaman kuliner yang lebih memuaskan.</textarea>
            </div>
            <div class="row mb-3">
                <div class="col-3">
                    <label for="totalTime" class="form-label">Total Time</label>
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" id="time" placeholder="Total Time" readonly value="1.5 hours, plus chilling">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-3">
                    <label for="category" class="form-label">Category</label>
                </div>
                <div class="col-6">
                    <input type"text" class="form-control" id="category" readonly value="Main Dish">
                </div>
            </div>
        </div>
        <div class="col-6 my-4">
            <h2 style="border-bottom: 4px solid #C84C02;">Ingredients</h2>
            <div class="form-control" id="ingredients" contenteditable="true" style="height: 256px; overflow-y: auto; background-color: rgba(200, 76, 2, 0.25)">
                <ul>
                    <li>3 pounds center-cut beef tenderloin</li>
                    <li>2 ounces pancetta or bacon, finely chopped (¼ cup)</li>
                    <li>2 tablespoons unsalted butter</li>
                    <li>12 ounces mushrooms, very finely chopped (4 cups)</li>
                    <li>1 shallot, diced</li>
                    <li>2 tablespoons extra-virgin olive oil, plus more for drizzling</li>
                    <li>2 garlic cloves, minced</li>
                    <li>2 teaspoons fresh thyme leaves</li>
                    <li>1 tablespoon dry sherry or dry vermouth</li>
                    <li>Kosher salt and black pepper</li>
                    <li>2 tablespoons Dijon mustard</li>
                    <li>10 to 12 thin slices prosciutto</li>
                    <li>1 large egg</li>
                    <li>16 ounces puff pastry, thawed</li>
                </ul>
            </div>
        </div>
        <div class="col-6 my-4">
            <h2 style="border-bottom: 4px solid #C84C02;">Directions</h2>
            <textarea class="form-control" id="directions" rows="16" placeholder="Enter Directions" readonly>
Step 1
Using kitchen twine, tie the tenderloin into a 12-inch log, folding the thinner end onto itself. (Use your hands to squeeze the meat into a log. You can be aggressive here.)

Step 2
Place pancetta in a cold 12-inch skillet. Cook over medium heat, stirring occasionally, until pancetta starts to brown, 6 to 8 minutes.

Step 3
Add butter, raise heat to high, and stir in mushrooms and shallot. Cook until the liquid released by the mushrooms has cooked off, 4 to 7 minutes. Reduce heat to medium and continue to cook until mushrooms are browned, stirring frequently, another 18 to 23 minutes. (Take your time here, you want a deep golden color for the best flavor.) Scrape bottom of the skillet as necessary to prevent burning.

Step 4
If the pan looks dry, drizzle in a little olive oil, then stir in garlic and thyme leaves. Cook until fragrant, another 1 to 2 minutes. Stir in sherry, scraping up the browned bits on the bottom of the pan. Scrape mixture into a medium bowl to cool. (Do not add salt at this point.)

Step 5
In the same skillet, heat 2 tablespoons olive oil over medium-high. Season beef generously with salt and pepper, then sear on all sides until browned, 1 to 2 minutes per side. Transfer to a plate, and cool slightly. Remove any twine. Brush meat all over with mustard.

Step 6
On a clean work surface, overlap long sheets of plastic wrap (about 15-by-15 inches). Place prosciutto slices on top to make about a 14-by-7-inch rectangle, arranging them in an even layer and overlapping the pieces slightly. Spread cooled mushroom mixture on top.

Step 7
Place beef along one long end of the prosciutto slices, and roll prosciutto tightly around beef. Wrap tightly with plastic wrap, twisting both ends like a candy wrapper. Chill in the refrigerator for at least 30 minutes and up to overnight.

Step 8
Meanwhile, heat oven to 400 degrees, and line a rimmed baking sheet with parchment paper. In a small bowl, whisk together egg and 1 teaspoon water. Lay puff pastry out on the prepared baking sheet, lightly draping over edges. (The pastry needs to be at least 14-inches long and 13-inches wide to cover the beef; if not, roll it out as needed.)

Step 9
Carefully unwrap and place chilled log along the edge of one long side of puff pastry. Roll beef up tightly, then place it seam-side down on the baking sheet. Tuck puff pastry over the ends of the beef to cover them, pinching to seal and folding underneath. Brush top and sides of pastry with egg wash, and use a small sharp knife to cut a few slits into the top of the pastry.

Step 10
Bake until a thermometer inserted in the center reads 115 degrees for rare, 25 to 35 minutes. (This timing will yield rare pieces at the thicker end and medium done pieces at the thinner end of the loin.) Remove from oven and let rest for 10 minutes, then slice and serve while warm.
            </textarea>
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
</script>

<?php include '../../components/footer/footer.php'; ?>
