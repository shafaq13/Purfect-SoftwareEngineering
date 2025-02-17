
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Resource Library</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css2/bootstrap.css" />
  

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css2/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css2/responsive.css" rel="stylesheet" />
</head>

<style>
  .nav-link {
              display: inline-block;
              margin-right: 10px;
          }
          
</style>

<body class="sub_page">
    <div class="hero_area ">
     <!-- header section starts -->
     <header class="header_section" style="background-color: #ced08b;">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.html">
            <img src="images2/logo.png" alt="">
          </a>
    
          <!-- Navbar links -->
          <div class="navbar-collapse justify-content-center" id="navbarSupportedContent">
             <!-- Navbar links -->
        <div class="navbar-collapse justify-content-center" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="mainpage2.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="donateview2.php">Donation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="adoptview1.php">Adoption</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="faq.php">FAQ'S</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="resource.php">Resource Library</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="commentsindex.php">Reviews</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="displaypet.php">Find Your Pet</a>
          </li>
            <?php
            if (isset($_SESSION['login_status']) && $_SESSION['login_status'] == '1') {
                echo '<li class="nav-item">';
                echo '<a class="nav-link" href="myprofile2.php">My Profile</a>';
                echo '</li>';
                echo '<li class="nav-item">';
                echo '<a class="nav-link" href="logout.php">Logout</a>';
                echo '</li>';
            } else {
                echo '<li class="nav-item">';
                echo '<a class="nav-link" href="customerlogin2.php">Login</a>';
                echo '</li>';
            }
          ?>
          </ul>
        </div>
          </div>
         
          
        </nav>
      </div>
    </header>
  <!-- end header section -->
  
  
    </div>


    <div class="text-center">
        <h2 class="text-center mt-5" id="welcome">Resource Library</h2>
        <hr class="MLLine" style="width:20vw;">
    </div>

    <div class="container-fluid pt-5">
            <div class="container py-5" style="background-color: #ced08b;">
                <div class="row pb-3">
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="d-flex flex-column text-center  justify-content-center bg-white mb-2 p-3 p-sm-5 h-100 shadow" >
                            <p> <img src="images2/EmergencyDog.png" alt="" class="img-fluid"> </p>
                            <h3 class="flaticon-house display-3 font-weight-normal text-secondary mb-3"></h3>
                            <h3 class="mb-3">The emergency checklist all pet parents need</h3>
                            <!-- <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum sit vero stet ipsum justo</p> -->
                            <span class="mt-auto">
                                <a class="text-uppercase font-weight-bold mt-auto btn btn-secondary" data-toggle="modal" data-target="#emergencyChecklistModal">Read More</a>

                            </span>
                        </div>
                    </div>
                    <!-- Modal for Emergency Checklist -->
                    <div class="modal fade" id="emergencyChecklistModal" tabindex="-1" role="dialog" aria-labelledby="emergencyChecklistModalLabel" aria-hidden="true">
                        <div class="modal-dialog  modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header" style="background-color: #002366; color: white;">
                              <h5 class="modal-title" id="emergencyChecklistModalLabel">The Emergency Checklist All Pet Parents Need</h5>
                              <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body" >
                              <p class="text-dark" style="padding-left: 10px;">
                                    <b>1.</b> Contact Information<br>
                                    Have a list of important contact information readily available. This should include your veterinarian's number, an emergency veterinary clinic's number, and the number for a local animal poison control center. It's also wise to keep a copy of your pet's medical records, including vaccinations and any ongoing health conditions.
                                </p>
                                <p class="text-dark" style="padding-left: 10px;">
                                    <b>2.</b> First Aid Supplies<br>
                                    A well-stocked pet first aid kit can be a lifesaver. Include items like:
                                    <br>
                                    Sterile gauze and bandages
                                    Adhesive tape
                                    Tweezers    
                                    Antiseptic wipes
                                    Scissors
                                    Digital thermometer
                                    Disposable gloves
                                    Pet-safe disinfectant
                                    Saline solution for flushing wounds or eyes
                                </p>
                                <p class="text-dark" style="padding-left: 10px;">
                                    <b>3.</b> Medications<br>
                                    If your pet is on any regular medications, ensure you have a sufficient supply in your emergency kit. Rotate them periodically to prevent expiration. Additionally, include any prescription information and dosage instructions.
                                </p>
                                <p class="text-dark" style="padding-left: 10px;">
                                    <b>4.</b> Food and Water<br>
                                    Pack enough of your pet's regular food to last for a few days. Store it in an airtight container to keep it fresh. Also, carry a supply of bottled water in case your pet's access to clean water is compromised.
                                </p>
                                <p class="text-dark" style="padding-left: 10px;">
                                    <b>5.</b> Comfort Items<br>
                                    Familiar items can help reduce stress during emergencies. Include your pet's favorite toys, blanket, or bed to provide comfort and a sense of security.
                                </p>
                                <p class="text-dark" style="padding-left: 10px;">
                                    <b>6.</b> Leash, Collar, and Harness<br>
                                    Always have an extra leash, collar, and harness in case the ones you're using become damaged or lost. These are essential for keeping your pet under control and preventing them from running off in unfamiliar or chaotic situations.
                                </p>
                            </div>
                            <div>
                                <p class="text-dark" style="padding-left: 25px;">
                                    <b>7.</b> Carrier or Crate<br>
                                    If evacuation is necessary, having a safe and comfortable carrier or crate for your pet is vital. Make sure it's large enough for them to stand, turn around, and lie down comfortably.
                                </p>
                                <p class="text-dark" style="padding-left: 25px;">
                                    <b>8.</b> Identification<br>
                                    Ensure your pet's ID tag is up to date with your current contact information. Microchipping is an excellent way to provide permanent identification; just make sure the associated details are current.
                                </p>
                                <p style="padding-left: 25px;">
                                    <b>9.</b> Recent Photos<br>
                                    Keep recent photos of your pet in your emergency kit. These could prove invaluable if you become separated and need to provide identification to shelters or rescue organizations.
                                </p>
                                <p style="padding-left: 25px;">
                                    <b>10.</b> Emergency Blanket<br>
                                    An emergency blanket can help keep your pet warm in case of extreme weather conditions or if you need to spend time outdoors.
                                </p>
                                <p style="padding-left: 25px;">
                                    <b>11.</b> Waste Cleanup Supplies<br>
                                    Pack bags for waste disposal, as well as some cleaning supplies like paper towels and sanitizing wipes.
                                </p>
                                <p style="padding-left: 25px;">
                                    <b>12.</b> Calming Aids<br>
                                    Some pets may become anxious during emergencies. Having calming aids, such as pheromone diffusers or anxiety wraps, can help soothe their nerves.
                                </p>
                                <p style="padding-left: 25px;">
                                    <b>13.</b> Instructions and Plan<br>
                                    Create a clear and concise plan for what to do in different emergency scenarios. Include evacuation routes, meeting points, and any specific needs your pet may have. Share this plan with family members or trusted neighbors.
                                </p>
                                <p style="padding-left: 25px;">
                                    Remember, emergencies can be chaotic and stressful, but having a well-prepared emergency kit can make all the difference for your pet's safety and well-being. Regularly review and update your kit to ensure that it remains current and effective. Your dedication to being a responsible pet parent extends to preparing for the unexpected – a testament to the love you have for your furry companion.
                                </p>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        </div>
                    </div>
  
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5 h-100 shadow">
                            <p> <img src="images2/CatnipCat.png" alt="" class="img-fluid"> </p>
                            <h3 class="flaticon-food display-3 font-weight-normal text-secondary mb-3"></h3>
                            <h3 class="mb-3">How catnip affects cats</h3>
                            <!-- <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum sit vero stet ipsum justo</p> -->
                            <span class="mt-auto">
                                <a class="text-uppercase font-weight-bold mt-auto btn btn-secondary" data-toggle="modal" data-target="#catnip">Read More</a>
                            </span>
                        </div>
                    </div>

                    <div class="modal fade" id="catnip" tabindex="-1" role="dialog" aria-labelledby="emergencyChecklistModalLabel" aria-hidden="true">
                        <div class="modal-dialog  modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header" style="background-color: #002366; color: white;">
                              <h5 class="modal-title" id="emergencyChecklistModalLabel">The Feline Fascination: How Catnip Affects Cats</h5>
                              <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body" >
                              <!-- <p class="text-dark" style="padding-left: 10px;"> -->
                                <p class="text-dark" style="padding-left: 10px;">
                                    <b>1.</b> The Catnip Connection<br>
                                    Catnip is a herbaceous plant from the mint family, native to Europe and Asia but now found worldwide. Its distinctive aroma is the result of a compound called nepetalactone, found in the leaves, stems, and seeds of the plant. When cats come into contact with catnip, whether through sniffing, licking, or chewing, the nepetalactone interacts with their olfactory receptors, triggering a series of intriguing reactions.
                                </p>
                                <p class="text-dark" style="padding-left: 10px;">
                                    <b>2.</b> The "Catnip High"<br>
                                    The most noticeable effect of catnip on cats is their almost euphoric response. It's not uncommon to see a cat sniff, chew, or rub against catnip, followed by a burst of energetic behavior. This can include rolling around, playful antics, and heightened vocalizations. Some cats may even become more affectionate during their catnip-induced moments.
                                </p>
                                <p class="text-dark" style="padding-left: 10px;">
                                    <b>3.</b> The Chill Out Zone<br>
                                    While some cats exhibit exuberance, others react to catnip in a more sedate manner. Instead of hyperactivity, they may enter a state of relaxation and blissful calmness. This tranquil reaction can be particularly soothing for anxious or stressed cats.
                                </p>
                                <p class="text-dark" style="padding-left: 10px;">
                                    <b>4.</b> The Temporary Nature<br>
                                    The effects of catnip are generally short-lived, lasting around 10 to 15 minutes. After this time, a refractory period follows during which the cat becomes temporarily immune to the allure of catnip. This reset mechanism ensures that cats don't become overwhelmed or desensitized to its effects.
                                </p>
                            </div>
                            <div>
                                <p class="text-dark" style="padding-left: 25px;">
                                    <b>5.</b> The Genetic Quirk<br>
                                    Interestingly, not all cats are equally susceptible to the allure of catnip. Around 50-70% of cats possess the genetic predisposition to respond to catnip, while others show little to no interest. Kittens and elderly cats are less likely to react strongly to catnip, and its effects generally don't manifest in cats under six months old.
                                </p>
                                <p class="text-dark" style="padding-left: 25px;">
                                    <b>6.</b> The Safe Indulgence<br>
                                    Catnip is considered safe for cats and can be a beneficial enrichment tool. It provides mental stimulation, encourages physical activity, and can even be used to redirect a cat's attention from destructive behavior. However, it's recommended not to overindulge cats in catnip sessions, as excessive exposure might lead to the cat becoming less responsive over time.
                                </p>
                                <p class="text-dark" style="padding-left: 25px;">
                                    <b>7.</b> The Safe Indulgence<br>
                                    In addition to catnip, some cats may also respond to other plants in the Nepeta genus, such as silver vine or valerian root. These alternatives can provide similar stimulating effects to catnip and offer variety in a cat's enrichment activities.
                                </p>
                                <p class="text-dark" style="padding-left: 25px;">
                                    In conclusion, the enigmatic effects of catnip on cats continue to captivate and entertain pet owners worldwide. From playful escapades to serene relaxation, catnip's influence varies from feline to feline. As long as it's offered in moderation and as part of a well-rounded enrichment plan, catnip can be a safe and enjoyable experience for both cats and their human companions. So, the next time you share a moment of catnip-induced bliss with your furry friend, remember you're witnessing one of nature's quirks that makes our feline companions so endlessly fascinating.
                                </p>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5 h-100 shadow" >
                            <p> <img src="images2/BloatingDog.png" alt="" class="img-fluid"> </p>
                            <h3 class="flaticon-grooming display-3 font-weight-normal text-secondary mb-3"></h3>
                            <h3 class="mb-3">Bloating in dogs</h3>
                            <!-- <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum sit vero stet ipsum justo</p> -->
                            <span class="mt-auto">
                                <a class="text-uppercase font-weight-bold mt-auto btn btn-secondary" data-toggle="modal" data-target="#bloating">Read More</a>
                            </span>
                        </div>
                    </div>

                    <div class="modal fade" id="bloating" tabindex="-1" role="dialog" aria-labelledby="emergencyChecklistModalLabel" aria-hidden="true">
                        <div class="modal-dialog  modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header" style="background-color: #002366; color: white;">
                              <h5 class="modal-title" id="emergencyChecklistModalLabel">The Bloating Battle: Understanding Canine Bloating</h5>
                              <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body" >
                              <p class="text-dark" style="padding-left: 10px;">
                                Bloating, a seemingly harmless condition, can turn into a serious and life-threatening issue for our beloved canine companions. Canine bloating, also known as gastric dilatation-volvulus (GDV) or bloat, is a medical emergency that requires immediate attention. Understanding its causes, symptoms, and preventive measures is crucial for every dog owner.</p>
                                <br>While the exact causes of bloating aren't always clear, certain factors are believed to contribute:
                    
                                <p class="text-dark" style="padding-left: 10px;">
                                    <b>1.</b> Eating Habits<br>
                                    Rapid eating, gulping air while eating, or consuming large meals can increase the likelihood of bloating. Dogs that eat quickly are more prone to swallowing air, which can lead to gas accumulation.
                    
                                </p>
                                <p class="text-dark" style="padding-left: 10px;">
                                    <b>2.</b> Breed Predisposition<br>
                                    Larger, deep-chested breeds, such as Great Danes, Boxers, and Standard Poodles, are more susceptible to bloating.
                                </p>
                                <p class="text-dark" style="padding-left: 10px;">
                                    <b>3.</b> Physical Activity After Eating<br>
                                    Engaging in vigorous exercise immediately after eating can potentially trigger bloating.
                   </p>
                                <p class="text-dark" style="padding-left: 10px;">
                                    <b>4.</b> Age and Genetics<br>
                                    Older dogs and those with a family history of bloating may be at a higher risk.
                   </p>
                   <p><b>Detecting the symptoms of bloating is crucial in addressing the issue promptly. Common signs of bloating in dogs include</b></p>
                    
                                <p class="text-dark" style="padding-left: 10px;">
                                    <b>1.</b> Restlessness<br>
                                    Dogs may appear anxious or restless, unable to find a comfortable position..
                    </p>
                            </div>
                            <div>
                                <p class="text-dark" style="padding-left: 25px;">
                                    <b>2.</b> Distended Abdomen<br>
                                    The abdomen may become visibly enlarged and feel tight.
                    </p>
                                <p class="text-dark" style="padding-left: 25px;">
                                    <b>3.</b> Unproductive Retching or Vomiting<br>
                                    Dogs may attempt to vomit but produce little or no content.
                     </p>
                                <p style="padding-left: 25px;">
                                    <b>4.</b> Excessive Drooling <br>
                                    Drooling more than usual can be a sign of discomfort.
                    </p>
                                <p style="padding-left: 25px;">
                                    <b>5.</b> Difficulty Breathing<br>
                                    As the stomach enlarges, it can put pressure on the diaphragm, making breathing difficult.
                    </p>
               
                                <p style="padding-left: 25px;">
                                    In conclusion, bloating in dogs is a serious condition that demands immediate attention. Being aware of the risk factors, recognizing the symptoms, and taking preventive measures can make all the difference in safeguarding your canine companion's health and well-being. Your dog's welfare is in your hands, and staying informed is a significant step towards ensuring their safety.
                   </p>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5 h-100 shadow" >
                            <p> <img src="images2/RingwormsDog.png" alt="" class="img-fluid"> </p>
                            <h3 class="flaticon-grooming display-3 font-weight-normal text-secondary mb-3"></h3>
                            <h3 class="mb-3">Ringworm in dogs</h3>
                            <!-- <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum sit vero stet ipsum justo</p> -->
                            <span class="mt-auto">
                                <a class="text-uppercase font-weight-bold mt-auto btn btn-secondary" data-toggle="modal" data-target="#worms">Read More</a>
                            </span>
                        </div>
                    </div>

                    <div class="modal fade" id="worms" tabindex="-1" role="dialog" aria-labelledby="emergencyChecklistModalLabel" aria-hidden="true">
                        <div class="modal-dialog  modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header" style="background-color: #002366; color: white;">
                              <h5 class="modal-title" id="emergencyChecklistModalLabel">Unraveling the Mystery of Ringworm in Dogs</h5>
                              <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body" >
                              <p class="text-dark" style="padding-left: 10px;">
                                Ringworm, despite its misleading name, is not caused by a worm but rather a fungal infection that can affect both humans and animals, including dogs. This common skin condition is highly contagious and can be a cause for concern among pet owners. Understanding the ins and outs of ringworm in dogs can help you identify, treat, and prevent its spread.
                            </p>
                                <p class="text-dark" style="padding-left: 10px;">
                                    <b>1.</b> The Fungus Among Us<br>
                          
                                    Ringworm is caused by various types of fungi known as dermatophytes. These fungi thrive in warm and humid environments, making pets susceptible to infection. Dogs with compromised immune systems, young puppies, and older dogs are particularly at risk.
                    
                                </p>
                                <p class="text-dark" style="padding-left: 10px;">
                                    <b>2.</b> Recognizing the Signs<br>
                                    Ringworm presents itself as circular, hairless patches on a dog's skin. These patches are often red and may be slightly raised, resembling a rash. The center of the lesion might appear more healed, giving it a ring-like appearance that inspired the name. Other symptoms can include:
                                 </p>
                                <p class="text-dark" style="padding-left: 10px;">
                                    <b>3.</b> Itchiness<br>
                                    Infected dogs may scratch or lick the affected areas due to discomfort.
                                </p>
                                <p class="text-dark" style="padding-left: 10px;">
                                    <b>4.</b> Scaly Skin<br>
                                    The skin around the lesion may become flaky or scaly.
                                </p>
                                <p class="text-dark" style="padding-left: 10px;">
                                    <b>5.</b> Hair Loss<br>
                                    Hair loss is common within the circular patches.
                                </p>
                            </div>
                            <div>
                                <p class="text-dark" style="padding-left: 25px;">
                                    <b>6.</b> Crusty Patches<br>
                                    Some lesions may develop a crust or scab on the surface.
                                 </p>
                                <p class="text-dark" style="padding-left: 25px;">
                                    <b>7.</b> Inflammation<br>
                                    In severe cases, the affected area can become inflamed or develop a secondary bacterial infection.
                                 </p>
                                <p style="padding-left: 25px;">
                                    <b> Diagnosis and Treatment</b> <br>
                                    If you suspect your dog has ringworm, consult a veterinarian for proper diagnosis and treatment. The vet will likely perform a fungal culture to confirm the presence of dermatophytes. Once diagnosed, treatment may involve:</p>
                                    </p>
                                <p style="padding-left: 25px;">
                                    <b>1.</b>Topical Medications<br>
                                    Antifungal creams, ointments, or shampoos can be applied directly to the affected areas. It's important to follow your vet's instructions and complete the treatment course.
                                </p>
                                <p style="padding-left: 25px;">
                                    <b>2.</b> 2. Oral Medications<br>
                                    In more severe cases, oral antifungal medications may be prescribed. These medications are usually reserved for extensive infections or cases where topical treatment isn't effective.
                    </p>
                                <p style="padding-left: 25px;">
                                    <b>3.</b> Environmental Management<br>
                                    Since ringworm is highly contagious, thorough cleaning of your dog's living environment is crucial to prevent reinfection. Vacuuming, washing bedding, and disinfecting surfaces can help eliminate fungal spores.
                    </p>
                                <p style="padding-left: 25px;">
                                    <b>4.</b> Isolation<br>
                                    Infected dogs should be isolated from other pets to prevent spreading the infection.
                    </p>
                                <p style="padding-left: 25px;">
                                    In conclusion, while ringworm in dogs might not be caused by worms, it's still a concern that requires attention. Being aware of the signs, seeking veterinary guidance, and taking preventive measures are essential steps in managing this fungal infection. With proper care and treatment, your canine companion can overcome ringworm and regain their healthy, vibrant coat.
                 </p>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5 h-100 shadow" >
                            <p> <img src="images2/TailwagCat.png" alt="" class="img-fluid"> </p>
                            <h3 class="flaticon-grooming display-3 font-weight-normal text-secondary mb-3"></h3>
                            <h3 class="mb-3">What do cats' tail wags mean?</h3>
                            <!-- <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum sit vero stet ipsum justo</p> -->
                            <span class="mt-auto">
                                <a class="text-uppercase font-weight-bold mt-auto btn btn-secondary" data-toggle="modal" data-target="#tail">Read More</a>
                            </span>
                        </div>
                    </div>

                    <div class="modal fade" id="tail" tabindex="-1" role="dialog" aria-labelledby="emergencyChecklistModalLabel" aria-hidden="true">
                        <div class="modal-dialog  modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header" style="background-color: #002366; color: white;">
                              <h5 class="modal-title" id="emergencyChecklistModalLabel">Decoding Cat Communication: Understanding the Meaning of Tail Wags</h5>
                              <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body" >
                                <p class="text-dark" style="padding-left: 10px;">
                                    Cats are renowned for their enigmatic behavior, and one of the most expressive parts of their body is their tail. The way a cat holds and moves its tail can provide valuable insights into its mood, emotions, and intentions. Understanding the various meanings behind cats' tail wags can help you better connect with your feline friend.
                                    </p>
                                    <p class="text-dark" style="padding-left: 10px;">
                                        <b>1.</b> The Straight-Up Tail<br>
                                        When a cat holds its tail upright, it's typically a sign of confidence, contentment, and a friendly demeanor. This is often seen when a cat greets you with its tail held straight up, displaying a sense of ease and comfort in your presence.
                                    </p>
                                    <p class="text-dark" style="padding-left: 10px;">
                                        <b>2.</b> The Slow Swish<br>
                                        A slow swaying of the tail, usually accompanied by a relaxed body, indicates that your cat is in a peaceful and content state. This gentle movement is often seen when a cat is lounging or enjoying some quiet time.
                                    </p>
                                    <p class="text-dark" style="padding-left: 10px;">
                                        <b>3.</b> The Puffed-Up Tail<br>
                                        A puffed-up tail is a clear indicator that a cat is feeling threatened, scared, or agitated. This defensive posture, often referred to as "bottle-brushing," is an attempt to make the cat appear larger and more intimidating. It's a signal that the cat might be ready to defend itself if necessary.
                                    </p>
                                    <p class="text-dark" style="padding-left: 10px;">
                                        <b>4.</b> The Curved Tail<br>
                                        A tail that twitches at the tip can indicate a cat's heightened excitement or anticipation. This often happens when a cat is focused on prey, a toy, or an interesting movement nearby. It's a sign that your cat is ready for action.
                                    </p>
                                    <p class="text-dark" style="padding-left: 10px;">
                                        <b>5.</b> The Twitching Tip<br>
                                        A tail that twitches at the tip can indicate a cat's heightened excitement or anticipation. This often happens when a cat is focused on prey, a toy, or an interesting movement nearby. It's a sign that your cat is ready for action.
                                    </p>
                                </div>
                                <div>
                                    <p class="text-dark" style="padding-left: 25px;">
                                        <b>6.</b> The Flicking Tail<br>
                                        A tail that flicks back and forth rapidly can be a sign of irritation or annoyance. It's often seen when a cat is interacting with something it doesn't like, such as an unwelcome touch or an object that's bothering it.
                                    </p>
                                    <p style="padding-left: 25px;">
                                        <b>7.</b> The Wagging Tail<br>
                                        A wagging tail in cats is not equivalent to a wagging tail in dogs. In cats, a wagging tail typically signals an agitated or conflicted state. It's important to pay attention to other body language cues when interpreting this behavior, as the context matters in understanding the specific emotion the cat is expressing.
                                    </p>
                                    <p style="padding-left: 25px;">
                                        <b>8.</b> The Low-Hanging Tail<br>
                                        A tail that's held low to the ground, sometimes tucked between the hind legs, can indicate submission, fear, or anxiety. This is often seen when a cat encounters a dominant or unfamiliar presence.
                                    </p>
                                    <p style="padding-left: 25px;">
                                        <b>9.</b>The Quivering Tail<br>
                                        A tail that quivers while the cat is holding it still can be a sign of intense excitement, particularly during moments of play or anticipation.
                                    </p>
                                    <p style="padding-left: 25px;">
                                    In conclusion, a cat's tail is a powerful tool for communication, reflecting a wide range of emotions and intentions. By paying close attention to your cat's tail movements in conjunction with their overall body language, facial expressions, and vocalizations, you can gain valuable insights into their current state of mind. Remember that each cat is unique, so take the time to observe and learn your cat's individual tail language to strengthen your bond and enhance your understanding of their feelings.
                                    </p>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5 h-100 shadow">
                            <p> <img src="images2/SeparationA.png" alt="" class="img-fluid"> </p>
                            <h3 class="flaticon-grooming display-3 font-weight-normal text-secondary mb-3"></h3>
                            <h3 class="mb-3">Does your pet suffer from separation anxiety?</h3>
                            <!-- <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum sit vero stet ipsum justo</p> -->
                            <span class="mt-auto">
                                <a class="text-uppercase font-weight-bold mt-auto btn btn-secondary" data-toggle="modal" data-target="#sep">Read More</a>
                            </span>
                        </div>
                    </div>

                    <div class="modal fade" id="sep" tabindex="-1" role="dialog" aria-labelledby="emergencyChecklistModalLabel" aria-hidden="true">
                        <div class="modal-dialog  modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header" style="background-color: #002366; color: white;">
                              <h5 class="modal-title" id="emergencyChecklistModalLabel">Recognizing and Addressing Pet Separation Anxiety</h5>
                              <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body" >
                              <p class="text-dark" style="padding-left: 10px;">
                                    <b>1.</b> Unveiling Separation Anxiety<br>
                                    Separation anxiety is a psychological condition that occurs when pets become excessively anxious or distressed when separated from their owners. This can manifest in various ways, depending on the individual pet's personality and circumstances.
                    </p>
                                <p class="text-dark" style="padding-left: 10px;">
                                    <b>2.</b> Recognizing the Signs<br>
                                    Pets with separation anxiety may exhibit a range of behaviors, including:
    
                                </p>
                                <p class="text-dark" style="padding-left: 10px;">
                                    <b>3.</b> Excessive Vocalization<br>
                                    Constant barking, meowing, or howling when alone. </p>
                                <p class="text-dark" style="padding-left: 10px;">
                                    <b>4.</b> Destructive Behavior<br>
                                    Chewing furniture, scratching doors, or tearing up belongings.
                    </p>
                                <p class="text-dark" style="padding-left: 10px;">
                                    <b>5.</b> Inappropriate Elimination<br>
                                    Accidents in the house, even if the pet is usually housetrained.
                    </p>
                                <p class="text-dark" style="padding-left: 10px;">
                                    <b>6.</b> Escape Attempts<br>
                                    Trying to escape or find their way back to their owner.
                     </p>
                            </div>
                            <div>
                                <p class="text-dark" style="padding-left: 25px;">
                                    <b>7.</b> Excessive Greeting<br>
                                    Overwhelming excitement when the owner returns, as if they've been apart for a long time.
                    </p>
                                <p class="text-dark" style="padding-left: 25px;">
                                    <b>8.</b> Loss of Appetite<br>
                                    Refusing to eat when alone.
                                </p>
                                <p style="padding-left: 25px;">
                                    In conclusion, recognizing and addressing separation anxiety is crucial for the well-being of our beloved pets. By understanding the signs, identifying potential triggers, and implementing appropriate management strategies, you can help your pet feel more secure and content when you're not around. Remember, your patience, love, and commitment are vital in helping your furry friend overcome their anxiety and enjoy a happier, more relaxed life.
                </p>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!-- info section -->
    <section class="info_section ">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-3">
              <div class="info_contact">
                <h5>CONTACT INFO</h5>
                <div>
                  <img src="images2/call.png" alt="" />
                  <p>+923457285693</p>
                </div>
                <div>
                  <img src="images2/mail.png" alt="" />
                  <p>k213178@nu.edu.pk<br>
                  k213198@nu.edu.pk</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="info_menu">
                    <h5>More From PURFECT</h5>
                    <div class="menu_container d-flex flex-column">
                      <a href="mainpage2.php" class="footer-menu-btn mb-2">Home</a>
                      <a href="adoptview1.php" class="footer-menu-btn mb-2">Adoption</a>
                      <a href="donateview2.php" class="footer-menu-btn mb-2">Donation</a>
                      <a href="resource.php" class="footer-menu-btn mb-2">Resource Library</a>
                      <a href="faq.php" class="footer-menu-btn mb-2">FAQs</a>
                      <a href="commentsindex.php" class="footer-menu-btn mb-2">Reviews</a>
                    </div>
                  </div>
            </div>
      
            <div class="col-md-6 col-lg-3">
              <div class="info_social">
                <h5>Social Media</h5>
                <div class="social_container">
                  <div><a href=""><img src="images2/fb.png" alt="" /></a></div>
                  <div><a href=""><img src="images2/twitter.png" alt="" /></a></div>
                  <div><a href=""><img src="images2/linkedin.png" alt="" /></a></div>
                  <div><a href=""><img src="images2/instagram.png" alt="" /></a></div>
                </div>
              </div>
            </div>
            
      
        </div>
        </div>
      </section>



    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js2/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> -->
    <!-- Bootstrap 5 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js2/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="js2/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js2/bootstrap.js"></script>
    <script>
      function openNav() {
        document.getElementById("myNav").classList.toggle("menu_width")
        document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
      }
    </script>
</body>
</html>