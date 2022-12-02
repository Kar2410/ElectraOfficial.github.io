'use strict'

document.addEventListener("DOMContentLoaded", ()=>{
    // Variables
    const filters = document.querySelector('#filters');
    const imgGallery = document.querySelector('#imgGallery')

    const fragment = document.createDocumentFragment()

    // Filter buttons
    const arrayFilters = ["All Cactus", "Cylinder-Shaped", "Ball-Shaped", "Leaf-like"];
    
    // Images

    class cactusImg {
        constructor(title,url,alt,cacType){
            this.title=title;
            this.url=url;
            this.alt=alt;
            this.cacType=cacType;
        }
    }

    const img1 = new cactusImg("Cactus 1", "https://images.unsplash.com/photo-1459411552884-841db9b3cc2a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80", "cactus 1", "cylinder")

    const img2 = new cactusImg("Cactus 2", "https://images.unsplash.com/photo-1508022240297-e87369353901?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80", "cactus 2", "ball")

    const img3 = new cactusImg("Cactus 3", "https://images.unsplash.com/photo-1459156212016-c812468e2115?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=705&q=80", "cactus 3", "uncategorized")

    const img4 = new cactusImg("Cactus 4", "https://images.unsplash.com/photo-1592744536004-be419c811f4b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80      ", "cactus 4", "leaf")

    const img5 = new cactusImg("Cactus 5", "https://images.unsplash.com/photo-1551888419-c41351800459?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80", "cactus 5", "cylinder")

    const img6 = new cactusImg("Cactus 6", "https://images.unsplash.com/photo-1528476513691-07e6f563d97f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715&q=80", "cactus 6", "cylinder")

    const img7 = new cactusImg("Cactus 7", "https://images.unsplash.com/photo-1509423350716-97f9360b4e09?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80", "cactus 7", "leaf")

    const img8 = new cactusImg("Cactus 8", "https://images.unsplash.com/photo-1528475478853-5b89bed65c4c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715&q=80", "cactus 8", "cylinder")

    const img9 = new cactusImg("Cactus 9", "https://images.unsplash.com/photo-1508022713622-df2d8fb7b4cd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80", "cactus 9", "ball")

    const arrayImg = [img1, img2, img3, img4, img5, img6, img7, img8, img9];

    // Events
    filters.addEventListener("click",({target})=>{
        if(target.classList.contains("filter-btn")) { // Ensures only the buttons are clickable
            let current = document.getElementsByClassName("active");
            let found = [];
            imgGallery.innerHTML = "";
            switch (target.id) {
                case "Cylinder-Shaped":
                    found = arrayImg.filter(object => object.cacType=="cylinder");
                    break;
                case "Ball-Shaped":
                    found = arrayImg.filter(object => object.cacType=="ball");
                    break;
                case "Leaf-like":
                    found = arrayImg.filter(object => object.cacType=="leaf");
                    break;
                default:
                    found = arrayImg;
                    break;
            }
            // Add active class to the current button and remove from the previous one
            current[0].classList.remove("active");
            target.classList.add("active");
                
            // Add images to the gallery
            imgGallery.append(showImg(found));
        }
    });



    // Functions
    // Create filters dynamically
    const createFilters = ((array)=>{
        array.forEach((item, index) => {
            const btn = document.createElement("button");
            btn.classList.add("filter-btn")
            btn.textContent=item;
            btn.id=item;
            fragment.append(btn);
            if(index==0){
                btn.classList.add("active");
            }
        });
        return fragment;
    });

    // Add images to gallery
    const showImg = (array) =>{
        array.forEach(element => {
            const img = document.createElement("img");
            img.src = element.url;
            img.alt = element.alt;
            fragment.append(img);
        });
        return fragment;
    }

    filters.append(createFilters(arrayFilters));
    imgGallery.append(showImg(arrayImg));
}) // Load
