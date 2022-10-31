
<form action="index.php" method="POST">
                    <h2>Calculator</h2>   
                    <input name="nomer1" type="number" placeholder="#1" required/> 
                    <?php zvgeerprint(); ?>
                    <?php zvgeerprint(); ?>
                    <input name="nomer2" type="number" placeholder="#2" required/>
                    <select required name="uildel" class="form-select" aria-label="uildel">
                        <option selected></option>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                    </select>
                    <?php  knop(); ?>
            
                     <!-- <button type="submit">calculate</button>   -->
                    
                </form>