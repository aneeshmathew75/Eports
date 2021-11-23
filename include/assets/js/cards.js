(function(data) {
    var filterSelected = 'all';
    var filterContainer = null;
    function makeCards(filterContainer, data) {
        console.log(data);
        for (i = 0; i < data.length; i++) {
            const card = document.createElement('div');
            card.classList.add('col-md-6', 'col-lg-4', 'filtr-item');
            card.setAttribute('id', data[i].eventId);
            const imageTile = document.createElement('img');
            imageTile.setAttribute('src', data[i].eventImage);
            imageTile.classList.add('card-img', 'w-100', 'd-block', 'rounded-0')
            card.appendChild(imageTile);
            const title = document.createElement('div');
            title.classList.add('title-element');
            title.innerHTML = data[i].name;
            card.appendChild(title);
            const desc = document.createElement('div');
            desc.classList.add('desc-element');
            desc.innerHTML = data[i].desc1;
            card.appendChild(desc);
            const hostedBy = document.createElement('div');
            hostedBy.classList.add('hosted-by-container');
            const logoHosted = document.createElement('div');
            logoHosted.classList.add('logo-hosted');
            const img = document.createElement('img');
            img.setAttribute('src', data[i].logo);
            logoHosted.appendChild(img);
            const hostedByText = document.createElement('div');
            hostedByText.classList.add('hosted-by-text');
            const span = document.createElement('span');
            span.classList.add('title');
            span.innerHTML ='Hosted By: ';
            const span2 = document.createElement('span');
            span2.classList.add('hosted-name');
            span2.innerHTML = data[i].hostedBy;
            hostedBy.appendChild(logoHosted);
            hostedByText.appendChild(span);
            hostedByText.appendChild(span2);
            hostedBy.appendChild(hostedByText);
            card.appendChild(hostedBy);
            const footer = document.createElement('div');
            footer.classList.add('filter-card-footer');
            const dv1 = document.createElement('div')
            const dv2 = document.createElement('div');
            dv1.classList.add('card-action', 'card-event-date');
            dv1.innerHTML = data[i].eventDate;
            dv2.classList.add('card-action', 'card-event-fee');
            dv2.innerHTML = data[i].regdFee;
            footer.appendChild(dv1);
            footer.appendChild(dv2);
            card.appendChild(footer);
            filterContainer.appendChild(card);
        }
    }
    function onFilterCards(event) {
        const target = event.target;
        if (target.tagName !== 'SPAN') { return; }
        filterSelected = target.id;
        filterContainer.innerHTML = '';
        const newData = filterEventData(filterContainer, filterSelected);
        if (!newData.length) {
            showNoDataSign(filterContainer);
            return;
        }
        makeCards(filterContainer, newData);
    }
    function showNoDataSign(parentRef) {
        const dv = document.createElement('div');
        dv.style.display = 'flex';
        dv.style.alignItems = 'center';
        dv.style.justifyContent = 'center';
        dv.innerHTML = `No gmae availabe for the ${filterSelected.toUpperCase()} genre`;
        parentRef.appendChild(dv);
    }
    function filterEventData(parentRef, filterId) {
        if (filterSelected === 'all') {
            return data;
        }
        return data.filter(item => item.genre === filterId);
    }
    function initCards() {
        document.getElementById('filterButtons').addEventListener('click', onFilterCards);
        filterContainer = document.getElementById('filterContainer');
        const newData = filterEventData(filterContainer, filterSelected);
        makeCards(filterContainer, newData);
    }
    initCards();
})(eventData);
