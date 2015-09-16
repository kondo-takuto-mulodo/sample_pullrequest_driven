# Learning Pull Request Driven Development
## Outline
The repository is for learning pull request driven development.

## What's pull request driven?
With creating pull request before start coding, Issues and commits would be associated. After created pull request, you can track all commits and conversation about the branch in a pull request. It makes review be easy and makes your code get better.

## Flow

1\. At first, you need to create new issue for your task and pull request. For making your task be clear, write issue as TODO list with the following format. Actually it's better to consider TODO format each project.
```
e.g

## Outline
Writing outline of the issue at here.
 
## Features of development
- [ ] foo Bar
  - [ ] foo Bar
  - [ ] foo Bar
- [ ] foo Bar
 
## Additional Tasks
If new tasks are added after start working, 
write them at here for understanding those tasks are additional tasks.
- [ ] foo Bar
- [ ] foo Bar
- [ ] foo Bar
 
## Related issues
If a issue has related tasks, write link as issue number at here.
 
## Parent issue
If a issue has parent issue, write link as issue number at here.
 
#### Note
If a issue has some notes, write it at here.
```

Sample: https://github.com/kondo-takuto-mulodo/sample_pullrequest_driven/issues/1

2\. To create new branch for related issue.
```
git checkout -b "#[your issue number]"
git push origin "#[your issue number]"
```

https://github.com/kondo-takuto-mulodo/sample_pullrequest_driven/tree/%231

3\. To do empty commit for creating new pull request.
```
git commit --allow-empty
git push origin "#[your issue number]"
``` 

https://github.com/kondo-takuto-mulodo/sample_pullrequest_driven/commit/c4dbc632fcc3e51d293345aaa9d2b304dca5b4a6

4\. To create new pull request.

- To add prefix "[WIP]" and suffix "#[your issue number]" to the tile.
- "[WIP]" means "Work in progress". It indicates the issue work in progress.

https://github.com/kondo-takuto-mulodo/sample_pullrequest_driven/pull/2

5\. Start coding.

https://github.com/kondo-takuto-mulodo/sample_pullrequest_driven/pull/4

6\. Request review code.

https://github.com/kondo-takuto-mulodo/sample_pullrequest_driven/commit/d55654da8b2158929355983315e90c6438ae5c82

7\. Request merge branch.

After all review will be finished, you remove the prifix "[WIP]" and can merge your code to the other branch.