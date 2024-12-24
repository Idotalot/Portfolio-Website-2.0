function autoGrow(element) {
    element.style.height = "5px";
    element.style.height = (element.scrollHeight) + "px";
}

let aboutMeBlock = document.querySelector(".contentInformation").querySelector("textarea");
let currentText = aboutMeBlock.value;
console.log(currentText)

function updateInfo(webpage, element) {
    let updatedText = element.value;

    if (currentText != updatedText) {
        fetch('../../Includes/infoBlocks.php', {
            method: 'POST', // or POST if your backend doesn't support PUT
    
            headers: {
              'Content-Type': 'application/json',
            },
    
            body: JSON.stringify({
                type: "UPDATE",
                page: webpage,
                value: updatedText,
            }),
        })
        .then((response) => {
            if (!response.ok) {
                throw new Error('Network response was not OK');
            }
                return response.text();
            })
        .then((data) => {
            // alert(data);
            aboutMeBlock.classList.add("bg-green-400")
            setTimeout(() => {
                aboutMeBlock.classList.remove("bg-green-400")
            }, 500);
        })
        .catch((error) => {
            console.error('Error updating record:', error);
        });
    } else {
        console.log("No changes made")
    }

    currentText = aboutMeBlock.value;
}

autoGrow(aboutMeBlock)