let activityFilters = [];

function setActivityFilter(filter) {
  const valueSplit = filter.split('-');
  const filterType = valueSplit[0];
  const filterValue = valueSplit[1];

  activityFilters = activityFilters.filter(activityFilter => {
    const activityFilterType = activityFilter.split('-')[0];
    return activityFilterType !== filterType;
  });

  if (filterValue !== 'all') {
    activityFilters.push(filter);
  }

  applyActivityFilters();
}

function applyActivityFilters() {
  const activities = document.getElementsByClassName('activity-container');

  for (const activity of activities) {
    if (!activityFilters.length || activityFilters.every(activityFilter => activity.classList.contains(activityFilter))) {
      activity.classList.remove('d-none');
    } else {
      activity.classList.add('d-none');
    }
  }
}
