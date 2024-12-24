function autoGrow(element) {
    element.style.height = "5px";
    element.style.height = (element.scrollHeight) + "px";
}

let infoBlock = document.querySelector(".contentInformation").querySelector("textarea");
let currentText = infoBlock.value;
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
            let styleClass = null;
            let result = JSON.parse(data).response.result;

            if (result == true) {
                styleClass = "bg-green-400";
            } else {
                styleClass = "bg-red-500";
            }

            infoBlock.classList.add(styleClass);
            setTimeout(() => {
                infoBlock.classList.remove(styleClass);
            }, 500);            
        })
        .catch((error) => {
            console.error('Error updating record:', error);
        });
    } else {
        console.log("No changes made")
    }

    currentText = infoBlock.value;
}

autoGrow(infoBlock)